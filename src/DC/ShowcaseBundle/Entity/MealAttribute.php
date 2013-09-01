<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class MealAttribute
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $x_key;

    protected $x_value;

    protected $meal
    
 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;


} 
 
