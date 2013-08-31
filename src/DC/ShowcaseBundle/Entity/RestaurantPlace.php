<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class RestaurantPlace
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
     
     /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="places")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
 	protected $city;

 	protected $street;

 	protected $long;

 	protected $lat;

 	/**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="places")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
 	protected $restaurant;

 	protected $description;

 	/**
     * @ORM\OneToMany(targetEntity="RestaurantWorkTime", mappedBy="place")
     */
 	protected $workTime;

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

}