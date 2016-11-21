<?php

namespace EmpresaBundle\Controller;


use EmpresaBundle\Entity\Empresa;
use EmpresaBundle\Entity\Profesor;
use EmpresaBundle\Form\ProfesorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiProfesoresController extends Controller
{


    public function serializeEmpresa(Profesor $profesor)
    {
        return array(
            'nombre' => $profesor->getNombre(),
            'apellidos' => $profesor->getApellidos(),
            'departamento' => $profesor->getDepartamento(),
        );

    }


    public function allProfesoresAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Profesor');
        $profesores = $repository->findAll();

        //var_dump($empresas);
        $data = array('profesores' => array());
        foreach ($profesores as $profesor) {
            $data['profesores'][] = $this->serializeEmpresa($profesor);
        }
        $response = new JsonResponse($data, 200);
        return $response;

    }



}
