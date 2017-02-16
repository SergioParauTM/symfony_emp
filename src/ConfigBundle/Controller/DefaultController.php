<?php

namespace ConfigBundle\Controller;

use ConfigBundle\Entity\config;
use ConfigBundle\Form\configType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConfigBundle:Default:index.html.twig');
    }


    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('ConfigBundle:config');//Manejador de doctrine

        $conf = $repository->findAll();
        return $this->render('EmpresaBundle:Empresa:list_conf.html.twig', array("conf"=>$conf));
    }
    public function newAction(Request $request)
    {
        $conf = new config();
        $form = $this->createForm(configType::class,$conf);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $conf = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($conf);
            $em->flush();
            return $this->redirectToRoute('list_conf');
        }
        return $this->render('EmpresaBundle:Empresa:conf_view_add.html.twig', array("form"=>$form->createView()));
    }
}

