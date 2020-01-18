<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Championnats extends \App\Entity\Championnats implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'nbr_jours', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'matchs', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'classement', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'close'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'nbr_jours', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'matchs', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'classement', '' . "\0" . 'App\\Entity\\Championnats' . "\0" . 'close'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Championnats $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrJours(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrJours', []);

        return parent::getNbrJours();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrJours(int $nbr_jours): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrJours', [$nbr_jours]);

        return parent::setNbrJours($nbr_jours);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\User $user): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\User $user): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchs', []);

        return parent::getMatchs();
    }

    /**
     * {@inheritDoc}
     */
    public function addMatch(\App\Entity\Matchs $match): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMatch', [$match]);

        return parent::addMatch($match);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMatch(\App\Entity\Matchs $match): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMatch', [$match]);

        return parent::removeMatch($match);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassement(): ?\App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassement', []);

        return parent::getClassement();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassement(\App\Entity\Classement $classement): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassement', [$classement]);

        return parent::setClassement($classement);
    }

    /**
     * {@inheritDoc}
     */
    public function getClose(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClose', []);

        return parent::getClose();
    }

    /**
     * {@inheritDoc}
     */
    public function setClose(?int $close): \App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClose', [$close]);

        return parent::setClose($close);
    }

}
