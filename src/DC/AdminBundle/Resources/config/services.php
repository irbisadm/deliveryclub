<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

$container
    ->register(
        'dc.form.type.restaurant',
        'DC\ShowcaseBundle\Form\Type\CreateAdminRestaurantType'
    )
    ->addTag('form.type', array(
        'alias' => 'create_admin_restaurant',
    ))
;

/*

$container->setDefinition(
    'dc_admin.example',
    new Definition(
        'DC\AdminBundle\Example',
        array(
            new Reference('service_id'),
            "plain_value",
            new Parameter('parameter_name'),
        )
    )
);

*/