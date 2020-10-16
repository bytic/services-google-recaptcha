<?php

namespace ByTIC\GoogleRecaptcha\Manager\Traits;

use ReCaptcha\ReCaptcha;

/**
 * Trait HasClientTrait
 * @package ByTIC\GoogleRecaptcha\Manager\Traits
 */
trait HasClientTrait
{
    /**
     * @var null|ReCaptcha
     */
    protected $client = null;

    /**
     * @return ReCaptcha|null
     */
    public function getClient(): ReCaptcha
    {
        if ($this->client === null) {
            $this->initClient();
        }
        return $this->client;
    }

    /**
     * @param ReCaptcha|null $client
     */
    public function setClient(?ReCaptcha $client): void
    {
        $this->client = $client;
    }

    protected function initClient()
    {
        $client = new \ReCaptcha\ReCaptcha($this->getSecretKey());
        $this->setClient($client);
    }
}