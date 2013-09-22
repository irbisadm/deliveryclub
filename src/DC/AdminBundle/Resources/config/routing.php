<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dc_admin_homepage', new Route('/', array(
    '_controller' => 'DCAdminBundle:Default:index',
)));

$collection->add('dc_admin_manageusers', new Route('/users', array(
    '_controller' => 'DCAdminBundle:Users:list',
)));

$collection->add('dc_admin_addusers', new Route('/user', array(
    '_controller' => 'DCAdminBundle:Users:create',
)));

$collection->add('dc_admin_editusers', new Route('/user/{id}', array(
    '_controller' => 'DCAdminBundle:Users:edit',
)));

return $collection;
