<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class Meal
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $name;

    protected $weight;

    protected $price;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $needSideDishes

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

	/**
     * @ManyToMany(targetEntity="MealComponent")
     * @JoinTable(name="meal_mealcomponent",
     *      joinColumns={@JoinColumn(name="meal_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="mealcomponent_id", referencedColumnName="id")}
     *      )
     */
    private $components;

    /**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="dishes")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
     protected $restaurant;


} 
