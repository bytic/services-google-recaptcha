<?php

namespace ByTIC\GoogleRecaptcha;

use ByTIC\GoogleRecaptcha\Config\Traits\HasParamsTrait;

/**
 * Class RecaptchaManager
 * @package ByTIC\GoogleRecaptcha
 */
class RecaptchaManager
{
    use HasParamsTrait;
    use Manager\Traits\HasConfigTrait;
    use Manager\Traits\HasClientTrait;

    /**
     * @param $response
     * @return \ReCaptcha\Response
     */
    public function verify($response): \ReCaptcha\Response
    {
        return $this->getClient()->verify($response);
    }
}