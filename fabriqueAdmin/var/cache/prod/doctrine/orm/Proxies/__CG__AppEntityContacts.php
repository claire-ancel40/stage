<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contacts extends \App\Entity\Contacts implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Nom', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Prenom', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Tel', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Mobile', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'entreprise'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Nom', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Prenom', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Email', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Tel', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'Mobile', '' . "\0" . 'App\\Entity\\Contacts' . "\0" . 'entreprise'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contacts $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $Nom): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$Nom]);

        return parent::setNom($Nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $Prenom): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$Prenom]);

        return parent::setPrenom($Prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $Email): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$Email]);

        return parent::setEmail($Email);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel(string $Tel): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$Tel]);

        return parent::setTel($Tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', []);

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile(string $Mobile): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', [$Mobile]);

        return parent::setMobile($Mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreprise(): ?\App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreprise', []);

        return parent::getEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreprise(?\App\Entity\Entreprise $entreprise): \App\Entity\Contacts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreprise', [$entreprise]);

        return parent::setEntreprise($entreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

}
