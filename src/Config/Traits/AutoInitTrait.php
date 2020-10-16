<?php

namespace ByTIC\GoogleRecaptcha\Config\Traits;

/**
 * Trait AutoInitTrait
 * @package ByTIC\GoogleRecaptcha\Config\Traits
 */
trait AutoInitTrait
{
    /**
     * @return static
     */
    public static function autoInit()
    {
        if (static::canInitFromConfig()) {
            return static::fromConfig();
        }
        if (static::canInitFromEnv()) {
            return static::fromEnv();
        }
        return new static();
    }
}