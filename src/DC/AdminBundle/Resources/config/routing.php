<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dc_admin_homepage', new Route('/', array(
    '_controller' => 'DCAdminBundle:Default:index',
)));

$collection->add('dc_admin_manage_users', new Route('/users/{search}/{page}', array(
    '_controller' => 'DCAdminBundle:User:list',
    'search'      => '-1',
    'page'        => '0'
)));

$collection->add('dc_admin_edit_users', new Route('/user/{id}', array(
    '_controller' => 'DCAdminBundle:User:edit',
    'id'          => '-1'
)));

$collection->add('dc_admin_bann_users', new Route('/bannhammer/user/{id}',array(
    '_controller' => 'DCAdminBundle:User:bann'
)));

$collection->add('dc_admin_manage_restaurant', new Route('/restaurants/{search}/{page}',array(
    '_controller' => 'DCAdminBundle:Restaurant:list',
    'search'      => '-1',
    'page'        => '0'
)));

$collection->add('dc_admin_moderate_restaurant', new Route('/moderate/restaurants/{id}/{page}',array(
    '_controller' => 'DCAdminBundle:Restaurant:list',
    'id'          => '-1',
    'page'        => '0'
)));



return $collection;
