<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class ParkDomain
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

 	protected $name;

     /**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="park_domains")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
 	protected $restaurant;

     protected $domain;

     protected $stream;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $checked;

     /**
     * @ORM\Column(type="datetime")
     */
     protected $lastCheck;     

}