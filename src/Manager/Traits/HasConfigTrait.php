<?php

namespace ByTIC\GoogleRecaptcha\Manager\Traits;

use ByTIC\GoogleRecaptcha\Config\Config;

/**
 * Trait HasConfigTrait
 * @package ByTIC\GoogleRecaptcha\Manager\Traits
 */
trait HasConfigTrait
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Config $config
     * @return static
     */
    public static function fromConfig($config)
    {
        $agent = new static();
        $agent->setConfig($config);
        return $agent;
    }

    /**
     * @param Config $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
        $this->populateFromConfig();
    }

    protected function populateFromConfig()
    {
        $this->setEnabled($this->config->isEnabled());

        $site = $this->config->getSiteKey();
        if ($site) {
            $this->setSiteKey($site);
        }

        $key = $this->config->getSecretKey();
        if ($key) {
            $this->setSecretKey($key);
        }
    }
}