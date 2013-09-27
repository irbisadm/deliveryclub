<?php

namespace Proxies\__CG__\DC\ShowcaseBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Restaurant extends \DC\ShowcaseBundle\Entity\Restaurant implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDescriprion($descriprion)
    {
        $this->__load();
        return parent::setDescriprion($descriprion);
    }

    public function getDescriprion()
    {
        $this->__load();
        return parent::getDescriprion();
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

    public function addPlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $places)
    {
        $this->__load();
        return parent::addPlace($places);
    }

    public function removePlace(\DC\ShowcaseBundle\Entity\RestaurantPlace $places)
    {
        $this->__load();
        return parent::removePlace($places);
    }

    public function getPlaces()
    {
        $this->__load();
        return parent::getPlaces();
    }

    public function addParkDomain(\DC\ShowcaseBundle\Entity\ParkDomain $parkDomains)
    {
        $this->__load();
        return parent::addParkDomain($parkDomains);
    }

    public function removeParkDomain(\DC\ShowcaseBundle\Entity\ParkDomain $parkDomains)
    {
        $this->__load();
        return parent::removeParkDomain($parkDomains);
    }

    public function getParkDomains()
    {
        $this->__load();
        return parent::getParkDomains();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setNotifEmail($notifEmail)
    {
        $this->__load();
        return parent::setNotifEmail($notifEmail);
    }

    public function getNotifEmail()
    {
        $this->__load();
        return parent::getNotifEmail();
    }

    public function setIsSendingAllOrders($isSendingAllOrders)
    {
        $this->__load();
        return parent::setIsSendingAllOrders($isSendingAllOrders);
    }

    public function getIsSendingAllOrders()
    {
        $this->__load();
        return parent::getIsSendingAllOrders();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'title', 'descriprion', 'notifEmail', 'isSendingAllOrders', 'active', 'removed', 'places', 'park_domains');
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