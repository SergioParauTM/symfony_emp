<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EmpresaBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\Request;


class ProfesorController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Profesor');

        // find *all* products
        $profesor = $repository->findAll();

        return $this->render('EmpresaBundle:Empresa:profesoresAll.html.twig', array('profesores' => $profesor));
    }

}
