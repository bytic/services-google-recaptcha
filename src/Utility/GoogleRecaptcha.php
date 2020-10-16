<?php

namespace ByTIC\GoogleRecaptcha\Utility;

use ByTIC\GoogleRecaptcha\Config\Config;
use ByTIC\GoogleRecaptcha\RecaptchaManager;

/**
 * Class GoogleRecaptcha
 * @package ByTIC\GoogleRecaptcha\Utility
 */
class GoogleRecaptcha
{
    /**
     * @var null|RecaptchaManager
     */
    protected static $manager = null;

    protected static $config = null;

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        return call_user_func_array([static::getManager(), $method], $arguments);
    }

    /**
     * @return null|RecaptchaManager
     */
    public static function getManager()
    {
        if (self::$manager === null) {
            static::initManager();
        }

        return self::$manager;
    }

    protected static function initManager()
    {
        self::setManager(RecaptchaManager::fromConfig(static::getConfig()));
    }


    /**
     * @param RecaptchaManager $manager
     */
    public static function setManager($manager)
    {
        self::$manager = $manager;
    }

    /**
     * @return Config
     */
    protected static function getConfig()
    {
        if (self::$config === null) {
            self::$config = Config::autoInit();
        }

        return self::$config;
    }

    /**
     * @param $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }
}
