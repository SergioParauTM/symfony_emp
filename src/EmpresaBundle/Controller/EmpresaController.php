<?php

namespace EmpresaBundle\Controller;

use EmpresaBundle\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EmpresaBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\Request;


class EmpresaController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('EmpresaBundle:Empresa');

        // find *all* products
        $empresas = $repository->findAll();

        return $this->render('EmpresaBundle:Empresa:all.html.twig', array('todasempresas' => $empresas));
    }

    public function newAction(Request $request)
    {
        $newEmpresa = new Empresa();
        $form = $this->createForm(EmpresaType::class, $newEmpresa); //generamos formulario en blanco
        $form->handleRequest($request);

        //En caso de que request sea enviado y valido

        if ($form->isSubmitted() && $form->isValid()) {

            $newEmpresa = $form->getData(); //guardamos los datos de la empresa

            //Insertarlos dentro de la base de datos
            $newEmp = $this ->getDoctrine()->getManager();

            $newEmp-> persist($newEmpresa);

            $newEmp ->flush();


            return $this->redirectToRoute('all_empresa');
        }

        return $this->render('EmpresaBundle:Empresa:newEmp.html.twig', array('form' => $form->createView()));
    }




}
