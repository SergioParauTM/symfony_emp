<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class DefaultController extends Controller
{


    public function adminAction()
    {
        $user = new User();
        $plainPassword = '1234';
        $encoder = $this->container->get('security.password_encoder');
        $psswEncoded = $encoder->encodePassword($user, $plainPassword);
        $user->setPassword($psswEncoded);
        $user->setUsername("admin");
        $user->setEmail("admin@admin.com");
        $roles = ["ROLE_ADMIN", "ROLE_SUPER_ADMIN"];
        $user->setRoles($roles);
        // 4) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    public function getAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('gestorBundle:User');//Manejador de doctrine
        // find *all* users
        $users = $repository->findAll();
        return $this->render('AdminBundle:Default:users.html.twig', array("users"=>$users));
    }
    public function añadirRolesAction()
    {
        $quitarRol = $_POST['taskOption'];
        echo $quitarRol;
    }


    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
}
