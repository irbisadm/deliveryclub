<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\Meal
 *
 * @ORM\Entity
 */
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
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $needSideDishes;

     /**
     * @ORM\Column(type="boolean")
     */
    protected $seasonic;

    protected $months;

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

	/**
     * @ORM\ManyToMany(targetEntity="MealComponent")
     * @ORM\JoinTable(name="meal_mealcomponent",
     *      joinColumns={@ORM\JoinColumn(name="meal_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="mealcomponent_id", referencedColumnName="id")}
     *      )
     */
    private $components;

    /**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="dishes")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
     protected $restaurant;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->components = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Meal
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set needSideDishes
     *
     * @param boolean $needSideDishes
     * @return Meal
     */
    public function setNeedSideDishes($needSideDishes)
    {
        $this->needSideDishes = $needSideDishes;
    
        return $this;
    }

    /**
     * Get needSideDishes
     *
     * @return boolean 
     */
    public function getNeedSideDishes()
    {
        return $this->needSideDishes;
    }

    /**
     * Set seasonic
     *
     * @param boolean $seasonic
     * @return Meal
     */
    public function setSeasonic($seasonic)
    {
        $this->seasonic = $seasonic;
    
        return $this;
    }

    /**
     * Get seasonic
     *
     * @return boolean 
     */
    public function getSeasonic()
    {
        return $this->seasonic;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Meal
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set removed
     *
     * @param boolean $removed
     * @return Meal
     */
    public function setRemoved($removed)
    {
        $this->removed = $removed;
    
        return $this;
    }

    /**
     * Get removed
     *
     * @return boolean 
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * Add components
     *
     * @param \DC\ShowcaseBundle\Entity\MealComponent $components
     * @return Meal
     */
    public function addComponent(\DC\ShowcaseBundle\Entity\MealComponent $components)
    {
        $this->components[] = $components;
    
        return $this;
    }

    /**
     * Remove components
     *
     * @param \DC\ShowcaseBundle\Entity\MealComponent $components
     */
    public function removeComponent(\DC\ShowcaseBundle\Entity\MealComponent $components)
    {
        $this->components->removeElement($components);
    }

    /**
     * Get components
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set restaurant
     *
     * @param \DC\ShowcaseBundle\Entity\Restaurant $restaurant
     * @return Meal
     */
    public function setRestaurant(\DC\ShowcaseBundle\Entity\Restaurant $restaurant = null)
    {
        $this->restaurant = $restaurant;
    
        return $this;
    }

    /**
     * Get restaurant
     *
     * @return \DC\ShowcaseBundle\Entity\Restaurant 
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }
}