<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\RestaurantPlaceAttribute
 *
 * @ORM\Entity
 */
class RestaurantPlaceAttribute
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}