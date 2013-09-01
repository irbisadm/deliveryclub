<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\Restaurant
 *
 * @ORM\Entity
 */
class Restaurant
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
     * @ORM\Column(type="string")
     */
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->places = new \Doctrine\Common\Collections\ArrayCollection();
        $this->park_domains = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set descriprion
     *
     * @param string $descriprion
     * @return Restaurant
     */
    public function setDescriprion($descriprion)
    {
        $this->descriprion = $descriprion;
    
        return $this;
    }

    /**
     * Get descriprion
     *
     * @return string 
     */
    public function getDescriprion()
    {
        return $this->descriprion;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Restaurant
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
     * @return Restaurant
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
     * Add places
     *
     * @param \DC\ShowcaseBundle\Entity\RestaurantPlace $places
     * @return Restaurant
     */
    public function addPlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $places)
    {
        $this->places[] = $places;
    
        return $this;
    }

    /**
     * Remove places
     *
     * @param \DC\ShowcaseBundle\Entity\RestaurantPlace $places
     */
    public function removePlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $places)
    {
        $this->places->removeElement($places);
    }

    /**
     * Get places
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Add park_domains
     *
     * @param \DC\ShowcaseBundle\Entity\ParkDomain $parkDomains
     * @return Restaurant
     */
    public function addParkDomain(\DC\ShowcaseBundle\Entity\ParkDomain $parkDomains)
    {
        $this->park_domains[] = $parkDomains;
    
        return $this;
    }

    /**
     * Remove park_domains
     *
     * @param \DC\ShowcaseBundle\Entity\ParkDomain $parkDomains
     */
    public function removeParkDomain(\DC\ShowcaseBundle\Entity\ParkDomain $parkDomains)
    {
        $this->park_domains->removeElement($parkDomains);
    }

    /**
     * Get park_domains
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParkDomains()
    {
        return $this->park_domains;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Restaurant
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
     * Set title
     *
     * @param string $title
     * @return Restaurant
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}