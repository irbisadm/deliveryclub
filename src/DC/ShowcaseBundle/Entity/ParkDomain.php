<?php

namespace DC\ShowcaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParkDomain
 * 
 * @ORM\Entity
 */
class ParkDomain
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
    protected $name;

     /**
     * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="park_domains")
     * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
     */
    protected $restaurant;

    
    /**
     * @ORM\Column(type="string")
     */
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

    /**
     * Set name
     *
     * @param string $name
     * @return ParkDomain
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return ParkDomain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    
        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }
}