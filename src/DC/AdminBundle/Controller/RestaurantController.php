<?php

namespace DC\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestaurantController extends Controller
{
    public function listAction($search,$page){
      $repository       = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('DCShowcaseBundle:Restaurant');
      $onpage           = 20;
      $offset           = $onpage*$page;
      $restaurant       = $repository->searchRestaurant($search,$onpage,$offset);
      $count_restaurant = $repository->countSearchRestaurant($search);
      $params = array(
        "restaurant"  => $restaurant,
        "search"      => $search,
        "page"        => $page,
        "maxpage"     => ceil($count_restaurant/$onpage)-1
        );
      return $this->render('DCAdminBundle:Restaurant:list.html.twig', $params);
    }

    public function editAction($restaurant_id){
      return $this->render('DCAdminBundle:Restaurant:edit.html.twig', $params);
    }

}
