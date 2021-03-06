<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Classement extends \App\Entity\Classement implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'championnat', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'mj', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'g', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'n', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'bp', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'bc', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'db', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'pts', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'championnat', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'mj', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'g', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'n', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'bp', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'bc', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'db', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'pts', '' . "\0" . 'App\\Entity\\Classement' . "\0" . 'd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Classement $proxy) {
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
    public function getChampionnat(): ?\App\Entity\Championnats
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChampionnat', []);

        return parent::getChampionnat();
    }

    /**
     * {@inheritDoc}
     */
    public function setChampionnat(\App\Entity\Championnats $championnat): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChampionnat', [$championnat]);

        return parent::setChampionnat($championnat);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\App\Entity\User $user): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getMj(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMj', []);

        return parent::getMj();
    }

    /**
     * {@inheritDoc}
     */
    public function setMj(int $mj): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMj', [$mj]);

        return parent::setMj($mj);
    }

    /**
     * {@inheritDoc}
     */
    public function getG(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getG', []);

        return parent::getG();
    }

    /**
     * {@inheritDoc}
     */
    public function setG(int $g): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setG', [$g]);

        return parent::setG($g);
    }

    /**
     * {@inheritDoc}
     */
    public function getN(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getN', []);

        return parent::getN();
    }

    /**
     * {@inheritDoc}
     */
    public function setN(int $n): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setN', [$n]);

        return parent::setN($n);
    }

    /**
     * {@inheritDoc}
     */
    public function getBp(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBp', []);

        return parent::getBp();
    }

    /**
     * {@inheritDoc}
     */
    public function setBp(int $bp): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBp', [$bp]);

        return parent::setBp($bp);
    }

    /**
     * {@inheritDoc}
     */
    public function getBc(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBc', []);

        return parent::getBc();
    }

    /**
     * {@inheritDoc}
     */
    public function setBc(int $bc): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBc', [$bc]);

        return parent::setBc($bc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDb(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDb', []);

        return parent::getDb();
    }

    /**
     * {@inheritDoc}
     */
    public function setDb(int $db): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDb', [$db]);

        return parent::setDb($db);
    }

    /**
     * {@inheritDoc}
     */
    public function getPts(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPts', []);

        return parent::getPts();
    }

    /**
     * {@inheritDoc}
     */
    public function setPts(int $pts): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPts', [$pts]);

        return parent::setPts($pts);
    }

    /**
     * {@inheritDoc}
     */
    public function getD(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getD', []);

        return parent::getD();
    }

    /**
     * {@inheritDoc}
     */
    public function setD(?int $d): \App\Entity\Classement
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setD', [$d]);

        return parent::setD($d);
    }

}
