<?php

namespace ByTIC\GoogleRecaptcha\Config\Traits;

use ByTIC\GoogleRecaptcha\Config\Config;
use ByTIC\GoogleRecaptcha\Config\ConfigEnv;

/**
 * Trait CanInitFromEnviromentTrait
 * @package ByTIC\GoogleRecaptcha\Config\Traits
 */
trait CanInitFromEnviromentTrait
{

    /**
     * @return static|Config
     */
    public static function fromEnv()
    {
        $config = new static();
        $config->initFromEnv();
        return $config;
    }

    /**
     * @return bool
     */
    public static function canInitFromEnv()
    {
        if (empty(static::getEnvVar(ConfigEnv::SITE_KEY))) {
            return false;
        }
        if (empty(static::getEnvVar(ConfigEnv::SECRET_KEY))) {
            return false;
        }
        return true;
    }

    protected function initFromEnv()
    {
        $this->setEnabled(static::getEnvVar(ConfigEnv::ENABLED));
        $this->setSiteKey(static::getEnvVar(ConfigEnv::SITE_KEY));
        $this->setSecretKey(static::getEnvVar(ConfigEnv::SECRET_KEY));
    }

    /**
     * @param string $value
     * @param null $default
     * @return mixed|null
     */
    protected static function getEnvVar($value, $default = null)
    {
        if (isset($_ENV[$value])) {
            return $_ENV[$value];
        }
        return $default;
    }
}
