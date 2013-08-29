<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class Restaurant
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	protected $name;

	protected $title;

	/**
     * @ORM\Column(type="text")
     */
	protected $descriprion;

	/**
     * @ORM\OneToMany(targetEntity="RestaurantPlace", mappedBy="restaurant")
     */
	protected $places;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

	/**
     * @ORM\OneToMany(targetEntity="ParkDomain", mappedBy="restaurant")
     */
	protected $park_domains;
}