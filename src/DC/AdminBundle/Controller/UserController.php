<?php

namespace DC\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction($search,$page){
      $repository = $this->getDoctrine()
                    ->getRepository('DCShowcaseBundle:User');
      if($search!="-1")
        $users = $repository->searchUsers($search);
      else
        $users = $repository->findAll();

      $params = array(
        "users"   => $users,
        "search"  => $search,
        "page"    => $page,
        "maxpage" => ceil(count($users)/10)-1
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
