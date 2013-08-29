<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class RestaurantWorkTime
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="RestaurantPlace", inversedBy="workTime")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
 	protected $place;

 	/**
     * @ORM\Column(type="time")
     */
 	protected $startSpan;

 	/**
     * @ORM\Column(type="time")
     */
 	protected $endSpan;

 	/**
     * @ORM\Column(type="boolean")
     */
 	protected $work;

 	/**
     * @ORM\Column(type="boolean")
     */
 	protected $delivery;

 	/**
     * @ORM\Column(type="float")
     */
 	protected $minDeliverySumm;

 	/**
     * @ORM\Column(type="float")
     */
 	protected $maxDeliverySumm;

 	/**
     * @ORM\Column(type="float")
     */
 	protected $deliveryPrice;

 	/**
     * @ORM\Column(type="boolean")
     */
	protected $active;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $removed;

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
}