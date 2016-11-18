<?php

namespace EmpresaBundle\Controller;


use EmpresaBundle\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiEmpresaController extends Controller
{


    public function serializeEmpresa(Empresa $empresa)
    {
        return array(
            'nombre' => $empresa->getNombre(),
            'direccion' => $empresa->getDireccion(),
            'fecha_cracion' => $empresa->getFechaCreacion(),
        );

    }


    public function allEmpresaAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Empresa');
        $empresas = $repository->findAll();

        //var_dump($empresas);
        $data = array('empresas' => array());
        foreach ($empresas as $empresa) {
            $data['empresas'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 200);
        return $response;
        //return $this->json($empresas);
    }



}
