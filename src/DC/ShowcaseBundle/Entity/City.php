<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class City
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

 	protected $name;

     /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="citys")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
 	protected $region;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $active;

     /**
     * @ORM\Column(type="boolean")
     */
     protected $removed;

}