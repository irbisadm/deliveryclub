<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\Region
 *
 * @ORM\Entity
 */
class Region
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
     * @ORM\OneToMany(targetEntity="City", mappedBy="region")
     */
 	protected $citys;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $active;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $removed;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->citys = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Region
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
     * @return Region
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
     * Add citys
     *
     * @param \DC\ShowcaseBundle\Entity\City $citys
     * @return Region
     */
    public function addCity(\DC\ShowcaseBundle\Entity\City $citys)
    {
        $this->citys[] = $citys;
    
        return $this;
    }

    /**
     * Remove citys
     *
     * @param \DC\ShowcaseBundle\Entity\City $citys
     */
    public function removeCity(\DC\ShowcaseBundle\Entity\City $citys)
    {
        $this->citys->removeElement($citys);
    }

    /**
     * Get citys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCitys()
    {
        return $this->citys;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Region
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
}