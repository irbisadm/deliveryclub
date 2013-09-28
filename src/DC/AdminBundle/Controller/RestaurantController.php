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
      $restaurants      = $repository->searchRestaurant($search,$onpage,$offset);
      $count_restaurants= $repository->countSearchRestaurant($search);
      $params = array(
        "restaurants"  => $restaurants,
        "search"      => $search,
        "page"        => $page,
        "maxpage"     => ceil($count_restaurants/$onpage)-1
        );
      return $this->render('DCAdminBundle:Restaurant:list.html.twig', $params);
    }

    public function editAction($id){
      if($id!==-1){
        $restaurant = new Restaurant();
      }else{
        $repository = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('DCShowcaseBundle:Restaurant');
        $restaurant = $repository->findOneById($id);
      }
      $form = $this->createForm('create_admin_restaurant', $task);
      $params = array(
        "form" => $form
      );
      return $this->render('DCAdminBundle:Restaurant:edit.html.twig', $params);
    }

}
