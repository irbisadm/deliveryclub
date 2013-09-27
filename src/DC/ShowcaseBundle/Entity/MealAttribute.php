<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\MealAttribute
 *
 * @ORM\Entity
 */
class MealAttribute
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $x_key;
    /**
     * @ORM\Column(type="string")
     */
    protected $x_value;

    /**
     * @ORM\ManyToOne(targetEntity="Meal", inversedBy="attributes")
     * @ORM\JoinColumn(name="meal_id", referencedColumnName="id")
     */
    protected $meal;

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;



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
     * @return MealAttribute
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
     * @return MealAttribute
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
     * Set x_key
     *
     * @param string $xKey
     * @return MealAttribute
     */
    public function setXKey($xKey)
    {
        $this->x_key = $xKey;
    
        return $this;
    }

    /**
     * Get x_key
     *
     * @return string 
     */
    public function getXKey()
    {
        return $this->x_key;
    }

    /**
     * Set x_value
     *
     * @param string $xValue
     * @return MealAttribute
     */
    public function setXValue($xValue)
    {
        $this->x_value = $xValue;
    
        return $this;
    }

    /**
     * Get x_value
     *
     * @return string 
     */
    public function getXValue()
    {
        return $this->x_value;
    }

    /**
     * Set meal
     *
     * @param \DC\ShowcaseBundle\Entity\Meal $meal
     * @return MealAttribute
     */
    public function setMeal(\DC\ShowcaseBundle\Entity\Meal $meal = null)
    {
        $this->meal = $meal;
    
        return $this;
    }

    /**
     * Get meal
     *
     * @return \DC\ShowcaseBundle\Entity\Meal 
     */
    public function getMeal()
    {
        return $this->meal;
    }
}