<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\RestaurantWorkTime
 *
 * @ORM\Entity
 */
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
     * @ORM\Column(type="text")
     */
     protected $description;

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
     * @ORM\Column(type="integer")
     */
    protected $interval;

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
     * Set startSpan
     *
     * @param \DateTime $startSpan
     * @return RestaurantWorkTime
     */
    public function setStartSpan($startSpan)
    {
        $this->startSpan = $startSpan;
    
        return $this;
    }

    /**
     * Get startSpan
     *
     * @return \DateTime 
     */
    public function getStartSpan()
    {
        return $this->startSpan;
    }

    /**
     * Set endSpan
     *
     * @param \DateTime $endSpan
     * @return RestaurantWorkTime
     */
    public function setEndSpan($endSpan)
    {
        $this->endSpan = $endSpan;
    
        return $this;
    }

    /**
     * Get endSpan
     *
     * @return \DateTime 
     */
    public function getEndSpan()
    {
        return $this->endSpan;
    }

    /**
     * Set work
     *
     * @param boolean $work
     * @return RestaurantWorkTime
     */
    public function setWork($work)
    {
        $this->work = $work;
    
        return $this;
    }

    /**
     * Get work
     *
     * @return boolean 
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return RestaurantWorkTime
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
     * Set delivery
     *
     * @param boolean $delivery
     * @return RestaurantWorkTime
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
    
        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean 
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set minDeliverySumm
     *
     * @param float $minDeliverySumm
     * @return RestaurantWorkTime
     */
    public function setMinDeliverySumm($minDeliverySumm)
    {
        $this->minDeliverySumm = $minDeliverySumm;
    
        return $this;
    }

    /**
     * Get minDeliverySumm
     *
     * @return float 
     */
    public function getMinDeliverySumm()
    {
        return $this->minDeliverySumm;
    }

    /**
     * Set maxDeliverySumm
     *
     * @param float $maxDeliverySumm
     * @return RestaurantWorkTime
     */
    public function setMaxDeliverySumm($maxDeliverySumm)
    {
        $this->maxDeliverySumm = $maxDeliverySumm;
    
        return $this;
    }

    /**
     * Get maxDeliverySumm
     *
     * @return float 
     */
    public function getMaxDeliverySumm()
    {
        return $this->maxDeliverySumm;
    }

    /**
     * Set deliveryPrice
     *
     * @param float $deliveryPrice
     * @return RestaurantWorkTime
     */
    public function setDeliveryPrice($deliveryPrice)
    {
        $this->deliveryPrice = $deliveryPrice;
    
        return $this;
    }

    /**
     * Get deliveryPrice
     *
     * @return float 
     */
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
     * @return RestaurantWorkTime
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
}