<?php

namespace DC\ShowcaseBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function loginAction()
    {
        return $this->render('DCShowcaseBundle:Auth:login.html.twig', array());
    }

    public function registerAction()
    {
        return $this->render('DCShowcaseBundle:Auth:register.html.twig', array());
    }
}
