<?php

namespace DC\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction($search,$page){
      $repository = $this->getDoctrine()
                    ->getRepository('DCShowcaseBundle:User');
      $onpage = 20;
      $offset = $onpage*$page;
      $users = $repository->searchUsers($search,$onpage,$offset);
      $count_users = $repository->countSearchUsers($search);
      
      $params = array(
        "users"   => $users,
        "search"  => $search,
        "page"    => $page,
        "maxpage" => ceil($count_users/$onpage)-1
        );
      return $this->render('DCAdminBundle:User:list.html.twig', $params);
    }

    public function editAction($user_id){
      $repository = $this->getDoctrine()
                    ->getRepository('DCShowcaseBundle:User');
      $user = $repository->getOneById($user_id);

     
      $params =  array(
        "user_object" => ""
        );
      return $this->render('DCAdminBundle:User:edit.html.twig', $params);
    }

    public function bannAction($user_id)
    {
      
    }

}
