<?php

namespace DC\ShowcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParkDomain
 */
class ParkDomain
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $checked;

    /**
     * @var \DateTime
     */
    private $lastCheck;

    /**
     * @var \DC\ShowcaseBundle\Entity\Restaurant
     */
    private $restaurant;


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
     * Set checked
     *
     * @param boolean $checked
     * @return ParkDomain
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    
        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean 
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Set lastCheck
     *
     * @param \DateTime $lastCheck
     * @return ParkDomain
     */
    public function setLastCheck($lastCheck)
    {
        $this->lastCheck = $lastCheck;
    
        return $this;
    }

    /**
     * Get lastCheck
     *
     * @return \DateTime 
     */
    public function getLastCheck()
    {
        return $this->lastCheck;
    }

    /**
     * Set restaurant
     *
     * @param \DC\ShowcaseBundle\Entity\Restaurant $restaurant
     * @return ParkDomain
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
