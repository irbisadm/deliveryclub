<?php

namespace DC\ManagererBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DCManagererBundle:Default:index.html.twig', array('name' => $name));
    }
}
