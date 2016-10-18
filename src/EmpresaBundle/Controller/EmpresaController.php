<?php

namespace EmpresaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EmpresaController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Empresa');

        // find *all* products
        $empresas = $repository->findAll();

        return $this->render('EmpresaBundle:Empresa:all.html.twig',array('empresas'=>$empresas));
    }
}
