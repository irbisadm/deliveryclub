<?php

namespase DC\ShowcaseBundle\Form\Type

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateAdminUserType extends AbstractType{

  public function buildForm(FormBuilderInterface $builder, array $options){

  }

  public function getName(){
    return "create_admin_user";
  }
}