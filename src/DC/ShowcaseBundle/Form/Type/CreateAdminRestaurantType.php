<?php

namespace DC\ShowcaseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateAdminRestaurantType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options){
    $builder->add('name','text')
            ->add('title','text')
            ->add('descriprion','textarea')
            ->add('notifEmail','email')
            ->add('isSendingAllOrders','checkbox')
            ->add('active','checkbox')
            ->add('save', 'submit' , array('attr'=>array('class'=>'btn btn-success span3')))
            ->add('delete', 'submit', array('attr'=>array('class'=>'btn btn-danger span3')));
  }

  public function getName(){
    return "create_admin_restaurant";
  }
} 
