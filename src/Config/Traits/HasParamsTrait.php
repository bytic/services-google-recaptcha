<?php

namespace ByTIC\GoogleRecaptcha\Config\Traits;

/**
 * Trait HasParamsTrait
 * @package ByTIC\GoogleRecaptcha\Config\Traits
 */
trait HasParamsTrait
{
    /**
     * @var boolean
     */
    protected $enabled = false;

    /**
     * @var string
     */
    protected $siteKey;

    /**
     * @var string
     */
    protected $secretKey;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled): void
    {
        $enabled = ($enabled === true || $enabled === '1' || $enabled === 'true');
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function getSiteKey()
    {
        return $this->siteKey;
    }

    /**
     * @param string $siteKey
     */
    public function setSiteKey(string $siteKey)
    {
        $this->siteKey = $siteKey;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }
}
