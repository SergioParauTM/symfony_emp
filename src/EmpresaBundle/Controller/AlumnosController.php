<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EmpresaBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\Request;


class AlumnosController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Alumnos');

        // find *all* products
        $alumnos = $repository->findAll();

        return $this->render('EmpresaBundle:Empresa:alumnosAll.html.twig', array('alumnos' => $alumnos));
    }

}
