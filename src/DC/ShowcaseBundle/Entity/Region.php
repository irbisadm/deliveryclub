<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class Region
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

 	protected $name;

     /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="region")
     */
 	protected $citys;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $active;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $removed;

}