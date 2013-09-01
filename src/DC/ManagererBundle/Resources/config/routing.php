<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dc_managerer_homepage', new Route('/hello/{name}', array(
    '_controller' => 'DCManagererBundle:Default:index',
)));

return $collection;
