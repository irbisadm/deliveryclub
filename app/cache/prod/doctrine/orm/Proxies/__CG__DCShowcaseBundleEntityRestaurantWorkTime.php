<?php

namespace Proxies\__CG__\DC\ShowcaseBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class RestaurantWorkTime extends \DC\ShowcaseBundle\Entity\RestaurantWorkTime implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setStartSpan($startSpan)
    {
        $this->__load();
        return parent::setStartSpan($startSpan);
    }

    public function getStartSpan()
    {
        $this->__load();
        return parent::getStartSpan();
    }

    public function setEndSpan($endSpan)
    {
        $this->__load();
        return parent::setEndSpan($endSpan);
    }

    public function getEndSpan()
    {
        $this->__load();
        return parent::getEndSpan();
    }

    public function setWork($work)
    {
        $this->__load();
        return parent::setWork($work);
    }

    public function getWork()
    {
        $this->__load();
        return parent::getWork();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDelivery($delivery)
    {
        $this->__load();
        return parent::setDelivery($delivery);
    }

    public function getDelivery()
    {
        $this->__load();
        return parent::getDelivery();
    }

    public function setMinDeliverySumm($minDeliverySumm)
    {
        $this->__load();
        return parent::setMinDeliverySumm($minDeliverySumm);
    }

    public function getMinDeliverySumm()
    {
        $this->__load();
        return parent::getMinDeliverySumm();
    }

    public function setMaxDeliverySumm($maxDeliverySumm)
    {
        $this->__load();
        return parent::setMaxDeliverySumm($maxDeliverySumm);
    }

    public function getMaxDeliverySumm()
    {
        $this->__load();
        return parent::getMaxDeliverySumm();
    }

    public function setDeliveryPrice($deliveryPrice)
    {
        $this->__load();
        return parent::setDeliveryPrice($deliveryPrice);
    }

    public function getDeliveryPrice()
    {
        $this->__load();
        return parent::getDeliveryPrice();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setRemoved($removed)
    {
        $this->__load();
        return parent::setRemoved($removed);
    }

    public function getRemoved()
    {
        $this->__load();
        return parent::getRemoved();
    }

    public function setMonday($monday)
    {
        $this->__load();
        return parent::setMonday($monday);
    }

    public function getMonday()
    {
        $this->__load();
        return parent::getMonday();
    }

    public function setTuesday($tuesday)
    {
        $this->__load();
        return parent::setTuesday($tuesday);
    }

    public function getTuesday()
    {
        $this->__load();
        return parent::getTuesday();
    }

    public function setWednesday($wednesday)
    {
        $this->__load();
        return parent::setWednesday($wednesday);
    }

    public function getWednesday()
    {
        $this->__load();
        return parent::getWednesday();
    }

    public function setThursday($thursday)
    {
        $this->__load();
        return parent::setThursday($thursday);
    }

    public function getThursday()
    {
        $this->__load();
        return parent::getThursday();
    }

    public function setFriday($friday)
    {
        $this->__load();
        return parent::setFriday($friday);
    }

    public function getFriday()
    {
        $this->__load();
        return parent::getFriday();
    }

    public function setSaturday($saturday)
    {
        $this->__load();
        return parent::setSaturday($saturday);
    }

    public function getSaturday()
    {
        $this->__load();
        return parent::getSaturday();
    }

    public function setSunday($sunday)
    {
        $this->__load();
        return parent::setSunday($sunday);
    }

    public function getSunday()
    {
        $this->__load();
        return parent::getSunday();
    }

    public function setPlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $place = NULL)
    {
        $this->__load();
        return parent::setPlace($place);
    }

    public function getPlace()
    {
        $this->__load();
        return parent::getPlace();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'startSpan', 'endSpan', 'work', 'description', 'delivery', 'minDeliverySumm', 'maxDeliverySumm', 'deliveryPrice', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'active', 'removed', 'place');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}