<?php

namespace ByTIC\GoogleRecaptcha\Config\Traits;

use ByTIC\GoogleRecaptcha\Config\Config;
use Nip\Container\Container;

/**
 * Trait CanInitFromConfigTrait
 * @package ByTIC\GoogleRecaptcha\Config\Traits
 */
trait CanInitFromConfigTrait
{
    protected static $configRoot = null;

    /**
     * @return static|Config
     */
    public static function fromConfig()
    {
        $config = new static();
        $config->initFromConfig();
        return $config;
    }

    /**
     * @return bool
     */
    public static function canInitFromConfig(): bool
    {
        if (!function_exists('config')) {
            return false;
        }

        $container = function_exists('app') ? app() : Container::getInstance();
        if (!$container->has('config')) {
            return false;
        }

        $config = config();
        if ($config->has('recaptcha')) {
            static::$configRoot = 'recaptcha';
            return true;
        }
        if ($config->has('services.recaptcha')) {
            static::$configRoot = 'services.recaptcha';
            return true;
        }
        return false;
    }

    protected function initFromConfig()
    {
        $this->setEnabled(static::getConfigVar('enabled'));
        $this->setSiteKey(static::getConfigVar('site_key'));
        $this->setSecretKey(static::getConfigVar('secret_key'));
    }

    /**
     * @param string $value
     * @param null $default
     * @return mixed|null
     */
    protected static function getConfigVar($value, $default = null)
    {
        $config = config();
        return $config->get(static::$configRoot.'.'.$value, $default);
    }
}
