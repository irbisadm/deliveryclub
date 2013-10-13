<?php
namespace DC\ShowcaseBundle\Entity; 

use Doctrine\ORM\Mapping as ORM;

/**
 * DC\ShowcaseBundle\Entity\RestaurantPlace
 *
 * @ORM\Entity
 * @ORM\Table(name="restaurant_place")
 */
class RestaurantPlace
{
	/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  /**
  * @ORM\ManyToOne(targetEntity="City", inversedBy="places")
  * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
  */
 	protected $city;
    /**
     * @ORM\Column(type="string")
     */
 	protected $street;
    /**
     * @ORM\Column(type="float")
     */
 	protected $long;
    /**
     * @ORM\Column(type="float")
     */
 	protected $lat;

 	/**
  * @ORM\Column(type="text")
  */
  protected $description;

  /*
  TODO: Модуль отвечающий за подтверждение заказа. Работает так
  Если isValidated == true
    тогда Рестаран открыт
  Иначе 
    Если isConfirming == true
      тогда рестаран находится на проверке
    Иначе проверка провалена, и должен обязательно быть заполнен confirmingDescription
  */

  /**
  * @ORM\Column(name="is_validated", type="boolean")
  */
  protected $isValidated;

  /**
  * @ORM\Column(name="is_confirming", type="boolean")
  */
  protected $isConfirming;

  /**
  * @ORM\Column(name="confirming_desc", type="text")
  */
  protected $confirmingDescription;
  
  //Конец модуля подтверждения


  /**
  * @ORM\Column(name="notif_email",type="string")
  */
  protected $notifEmail;

  /**
  * @ORM\Column(name="notif_phone_code",type="string")
  */
  protected $notifPhoneCode;

  /**
  * @ORM\Column(name="notif_phone",type="string")
  */
  protected $notifPhone;

    /**
  * @ORM\ManyToOne(targetEntity="Restaurant", inversedBy="places")
  * @ORM\JoinColumn(name="restaurant_id", referencedColumnName="id")
  */
    protected $restaurant;


 	/**
  * @ORM\OneToMany(targetEntity="RestaurantWorkTime", mappedBy="place")
  */
 	protected $workTime;

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
        $this->workTime = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     * @return RestaurantPlace
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
     * Set active
     *
     * @param boolean $active
     * @return RestaurantPlace
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
     * @return RestaurantPlace
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
     * Set city
     *
     * @param \DC\ShowcaseBundle\Entity\City $city
     * @return RestaurantPlace
     */
    public function setCity(\DC\ShowcaseBundle\Entity\City $city = null)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return \DC\ShowcaseBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set restaurant
     *
     * @param \DC\ShowcaseBundle\Entity\Restaurant $restaurant
     * @return RestaurantPlace
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
     * Add workTime
     *
     * @param \DC\ShowcaseBundle\Entity\RestaurantWorkTime $workTime
     * @return RestaurantPlace
     */
    public function addWorkTime(\DC\ShowcaseBundle\Entity\RestaurantWorkTime $workTime)
    {
        $this->workTime[] = $workTime;
    
        return $this;
    }

    /**
     * Remove workTime
     *
     * @param \DC\ShowcaseBundle\Entity\RestaurantWorkTime $workTime
     */
    public function removeWorkTime(\DC\ShowcaseBundle\Entity\RestaurantWorkTime $workTime)
    {
        $this->workTime->removeElement($workTime);
    }

    /**
     * Get workTime
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return RestaurantPlace
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set long
     *
     * @param float $long
     * @return RestaurantPlace
     */
    public function setLong($long)
    {
        $this->long = $long;
    
        return $this;
    }

    /**
     * Get long
     *
     * @return float 
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return RestaurantPlace
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set isValidated
     *
     * @param boolean $isValidated
     * @return RestaurantPlace
     */
    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;
    
        return $this;
    }

    /**
     * Get isValidated
     *
     * @return boolean 
     */
    public function getIsValidated()
    {
        return $this->isValidated;
    }

    /**
     * Set isConfirming
     *
     * @param boolean $isConfirming
     * @return RestaurantPlace
     */
    public function setIsConfirming($isConfirming)
    {
        $this->isConfirming = $isConfirming;
    
        return $this;
    }

    /**
     * Get isConfirming
     *
     * @return boolean 
     */
    public function getIsConfirming()
    {
        return $this->isConfirming;
    }

    /**
     * Set confirmingDescription
     *
     * @param string $confirmingDescription
     * @return RestaurantPlace
     */
    public function setConfirmingDescription($confirmingDescription)
    {
        $this->confirmingDescription = $confirmingDescription;
    
        return $this;
    }

    /**
     * Get confirmingDescription
     *
     * @return string 
     */
    public function getConfirmingDescription()
    {
        return $this->confirmingDescription;
    }

    /**
     * Set notifEmail
     *
     * @param string $notifEmail
     * @return RestaurantPlace
     */
    public function setNotifEmail($notifEmail)
    {
        $this->notifEmail = $notifEmail;
    
        return $this;
    }

    /**
     * Get notifEmail
     *
     * @return string 
     */
    public function getNotifEmail()
    {
        return $this->notifEmail;
    }

    /**
     * Set notifPhoneCode
     *
     * @param string $notifPhoneCode
     * @return RestaurantPlace
     */
    public function setNotifPhoneCode($notifPhoneCode)
    {
        $this->notifPhoneCode = $notifPhoneCode;
    
        return $this;
    }

    /**
     * Get notifPhoneCode
     *
     * @return string 
     */
    public function getNotifPhoneCode()
    {
        return $this->notifPhoneCode;
    }

    /**
     * Set notifPhone
     *
     * @param string $notifPhone
     * @return RestaurantPlace
     */
    public function setNotifPhone($notifPhone)
    {
        $this->notifPhone = $notifPhone;
    
        return $this;
    }

    /**
     * Get notifPhone
     *
     * @return string 
     */
    public function getNotifPhone()
    {
        return $this->notifPhone;
    }
}