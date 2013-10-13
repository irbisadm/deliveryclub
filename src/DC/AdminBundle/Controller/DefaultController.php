<?php

namespace DC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DCAdminBundle:Default:index.html.twig', array());
    }
}
