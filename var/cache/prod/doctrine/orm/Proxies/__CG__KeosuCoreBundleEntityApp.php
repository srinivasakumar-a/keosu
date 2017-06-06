<?php

namespace Proxies\__CG__\Keosu\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class App extends \Keosu\CoreBundle\Entity\App implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
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
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
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
            return ['__isInitialized__', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'id', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'name', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'theme', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'version', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'packageName', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'description', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'author', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'website', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'email', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'debugMode', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'configPackages', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'preferences', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'splashscreens', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'icons'];
        }

        return ['__isInitialized__', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'id', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'name', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'theme', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'version', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'packageName', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'description', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'author', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'website', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'email', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'debugMode', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'configPackages', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'preferences', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'splashscreens', '' . "\0" . 'Keosu\\CoreBundle\\Entity\\App' . "\0" . 'icons'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (App $proxy) {
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
    public function getId()
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme($theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', [$theme]);

        return parent::setTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', []);

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setPackageName($packageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPackageName', [$packageName]);

        return parent::setPackageName($packageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageName', []);

        return parent::getPackageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebsite($website)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebsite', [$website]);

        return parent::setWebsite($website);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebsite', []);

        return parent::getWebsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function setDebugMode($debugMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDebugMode', [$debugMode]);

        return parent::setDebugMode($debugMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDebugMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDebugMode', []);

        return parent::getDebugMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfigPackages($configPackages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfigPackages', [$configPackages]);

        return parent::setConfigPackages($configPackages);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigPackages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigPackages', []);

        return parent::getConfigPackages();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreferences', []);

        return parent::getPreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreferences($preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreferences', [$preferences]);

        return parent::setPreferences($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function getSplashscreens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSplashscreens', []);

        return parent::getSplashscreens();
    }

    /**
     * {@inheritDoc}
     */
    public function setSplashscreens(\Keosu\CoreBundle\Model\Splashscreens $splashscreens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSplashscreens', [$splashscreens]);

        return parent::setSplashscreens($splashscreens);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcons()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcons', []);

        return parent::getIcons();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcons(\Keosu\CoreBundle\Model\Icons $icons)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcons', [$icons]);

        return parent::setIcons($icons);
    }

}
