<?php

namespace DC\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction($search){
      $repository = $this->getDoctrine()
                    ->getRepository('DCShowcaseBundle:User');

      $params = array(
        "users" => array()
        );
      return $this->render('DCAdminBundle:User:list.html.twig', $params);
    }

    public function editAction($user_id){
      $params =  array(
        "user_object" => ""
        );
      return $this->render('DCAdminBundle:User:edit.html.twig', $params);
    }

    public function createAction($type = null){
      $params = array(
        "user_object" => "" 
        );
      return $this->render('DCAdminBundle:User:create.html.twig',$params);
    }
}
