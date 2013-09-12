<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dc_admin_homepage', new Route('/', array(
    '_controller' => 'DCAdminBundle:Default:index',
)));
 

return $collection;
