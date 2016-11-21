<?php

namespace EmpresaBundle\Controller;


use EmpresaBundle\Entity\Empresa;
use EmpresaBundle\Entity\Profesor;
use EmpresaBundle\Form\ProfesorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiProfesoresController extends Controller
{


    public function serializeEmpresa(Profesor $profesor) //serializamos la parte de la entidad profesores que nos devolvera un array
    {
        return array(
            'nombre' => $profesor->getNombre(),
            'apellidos' => $profesor->getApellidos(),
            'departamento' => $profesor->getDepartamento(),
        );

        // este array lo que hará es llamar al get de la clase profesor y lo mostrará por nombre apellidos y departamento
    }


    public function allProfesoresAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Profesor'); // devolvera de la base de datos en la entidad profesor
        $profesores = $repository->findAll();

        //var_dump($empresas);
        $data = array('profesores' => array());
        foreach ($profesores as $profesor) { //recorremos la clase profesor
            $data['profesores'][] = $this->serializeEmpresa($profesor); //la serializamos y la guardamos como datos de profesor
        }
        $response = new JsonResponse($data, 200); // le decimos que la respuesta 200 y que será lo que nos devolverá
        return $response;


    }



}
