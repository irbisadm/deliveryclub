<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class Menu
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="RestaurantPlace", inversedBy="menus")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
 	protected $place;

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

	protected $repeatType

	protected $repeatAfter

	/**
     * @ORM\Column(type="boolean")
     */
	protected $monday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $tuesday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $wednesday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $thursday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $friday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $saturday;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $sunday;

	/**
     * @ManyToMany(targetEntity="Meal")
     * @JoinTable(name="menu_meal",
     *      joinColumns={@JoinColumn(name="menu_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="meal_id", referencedColumnName="id")}
     *      )
     */
    private $meals;

} 
