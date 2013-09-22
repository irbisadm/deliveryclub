<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dc_admin_homepage', new Route('/', array(
    '_controller' => 'DCAdminBundle:Default:index',
)));

$collection->add('dc_admin_manageusers_w_search', new Route('/users/{search}/{page}', array(
    '_controller' => 'DCAdminBundle:User:list',
    'search'      => '-1',
    'page'        => '0',
)));

$collection->add('dc_admin_addusers', new Route('/user', array(
    '_controller' => 'DCAdminBundle:User:create',
)));

$collection->add('dc_admin_editusers', new Route('/user/{id}', array(
    '_controller' => 'DCAdminBundle:User:edit',
)));

return $collection;
