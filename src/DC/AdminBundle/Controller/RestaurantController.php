<?php

namespace DC\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestaurantController extends Controller
{
    public function listAction($search,$page){
      $params = array(
        "users"   => $users,
        "search"  => $search,
        "page"    => $page,
        "maxpage" => ceil($count_users/$onpage)-1
        );
      return $this->render('DCAdminBundle:Restaurant:list.html.twig', $params);
    }

    public function editAction($restaurant_id){
      return $this->render('DCAdminBundle:Restaurant:edit.html.twig', $params);
    }

}
