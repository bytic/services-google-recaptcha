<?php

namespace ByTIC\GoogleRecaptcha\Config;

/**
 * Class Config
 * @package ByTIC\GoogleRecaptcha\Config
 */
class Config
{
    use Traits\AutoInitTrait;
    use Traits\CanInitFromEnviromentTrait;
    use Traits\CanInitFromConfigTrait;
    use Traits\HasParamsTrait;
}