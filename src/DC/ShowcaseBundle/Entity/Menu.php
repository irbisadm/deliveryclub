<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\Menu
 *
 * @ORM\Entity
 */
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
     * @ORM\Column(type="integer")
     */
	protected $payDown;

	/**
	* @ORM\Column(type="boolean")
	*/
	protected $removed;
    /**
     * @ORM\Column(type="integer")
     */
	protected $repeatType;
	/**
     * @ORM\Column(type="integer")
     */
	protected $repeatAfter;

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
	* @ORM\ManyToMany(targetEntity="Meal")
	* @ORM\JoinTable(name="menu_meal",
	*      joinColumns={@ORM\JoinColumn(name="menu_id", referencedColumnName="id")},
	*      inverseJoinColumns={@ORM\JoinColumn(name="meal_id", referencedColumnName="id")}
	*      )
	*/
	private $meals;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->meals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set active
     *
     * @param boolean $active
     * @return Menu
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
     * @return Menu
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
     * Set monday
     *
     * @param boolean $monday
     * @return Menu
     */
    public function setMonday($monday)
    {
        $this->monday = $monday;
    
        return $this;
    }

    /**
     * Get monday
     *
     * @return boolean 
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Set tuesday
     *
     * @param boolean $tuesday
     * @return Menu
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;
    
        return $this;
    }

    /**
     * Get tuesday
     *
     * @return boolean 
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set wednesday
     *
     * @param boolean $wednesday
     * @return Menu
     */
    public function setWednesday($wednesday)
    {
        $this->wednesday = $wednesday;
    
        return $this;
    }

    /**
     * Get wednesday
     *
     * @return boolean 
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Set thursday
     *
     * @param boolean $thursday
     * @return Menu
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;
    
        return $this;
    }

    /**
     * Get thursday
     *
     * @return boolean 
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set friday
     *
     * @param boolean $friday
     * @return Menu
     */
    public function setFriday($friday)
    {
        $this->friday = $friday;
    
        return $this;
    }

    /**
     * Get friday
     *
     * @return boolean 
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Set saturday
     *
     * @param boolean $saturday
     * @return Menu
     */
    public function setSaturday($saturday)
    {
        $this->saturday = $saturday;
    
        return $this;
    }

    /**
     * Get saturday
     *
     * @return boolean 
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * Set sunday
     *
     * @param boolean $sunday
     * @return Menu
     */
    public function setSunday($sunday)
    {
        $this->sunday = $sunday;
    
        return $this;
    }

    /**
     * Get sunday
     *
     * @return boolean 
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * Set place
     *
     * @param \DC\ShowcaseBundle\Entity\RestaurantPlace $place
     * @return Menu
     */
    public function setPlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $place = null)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return \DC\ShowcaseBundle\Entity\RestaurantPlace 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Add meals
     *
     * @param \DC\ShowcaseBundle\Entity\Meal $meals
     * @return Menu
     */
    public function addMeal(\DC\ShowcaseBundle\Entity\Meal $meals)
    {
        $this->meals[] = $meals;
    
        return $this;
    }

    /**
     * Remove meals
     *
     * @param \DC\ShowcaseBundle\Entity\Meal $meals
     */
    public function removeMeal(\DC\ShowcaseBundle\Entity\Meal $meals)
    {
        $this->meals->removeElement($meals);
    }

    /**
     * Get meals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * Set payDown
     *
     * @param integer $payDown
     * @return Menu
     */
    public function setPayDown($payDown)
    {
        $this->payDown = $payDown;
    
        return $this;
    }

    /**
     * Get payDown
     *
     * @return integer 
     */
    public function getPayDown()
    {
        return $this->payDown;
    }

    /**
     * Set repeatType
     *
     * @param integer $repeatType
     * @return Menu
     */
    public function setRepeatType($repeatType)
    {
        $this->repeatType = $repeatType;
    
        return $this;
    }

    /**
     * Get repeatType
     *
     * @return integer 
     */
    public function getRepeatType()
    {
        return $this->repeatType;
    }

    /**
     * Set repeatAfter
     *
     * @param integer $repeatAfter
     * @return Menu
     */
    public function setRepeatAfter($repeatAfter)
    {
        $this->repeatAfter = $repeatAfter;
    
        return $this;
    }

    /**
     * Get repeatAfter
     *
     * @return integer 
     */
    public function getRepeatAfter()
    {
        return $this->repeatAfter;
    }
}