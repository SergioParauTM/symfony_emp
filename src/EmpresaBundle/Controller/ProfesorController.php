<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\Empresa;
use EmpresaBundle\Entity\Profesor;
use EmpresaBundle\Form\ProfesorType;
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

    public function newAction(Request $request)
    {
        $newProfesor = new Profesor();
        $form = $this->createForm(ProfesorType::class, $newProfesor); //generamos formulario en blanco
        $form->handleRequest($request);

        //En caso de que request sea enviado y valido

        if ($form->isSubmitted() && $form->isValid()) {

            $newProfesor = $form->getData(); //guardamos los datos de la empresa

            //Insertarlos dentro de la base de datos
            $newPr = $this ->getDoctrine()->getManager();

            $newPr-> persist($newProfesor);

            $newPr ->flush();


            return $this->redirectToRoute('all_profesores');
        }

        return $this->render('EmpresaBundle:Empresa:newProf.html.twig', array('form' => $form->createView()));
    }

}
