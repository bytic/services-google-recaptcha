<?php

namespace ByTIC\GoogleRecaptcha;

use ByTIC\NewRelic\Utility\NewRelic;
use Nip\Container\ServiceProviders\Providers\AbstractServiceProvider;
use Nip\Container\ServiceProviders\Providers\BootableServiceProviderInterface;
use Nip\Http\Kernel\Kernel;
use Nip\Http\Kernel\KernelInterface;

/**
 * Class GoogleRecaptchaProvider
 * @package ByTIC\NewRelic
 */
class GoogleRecaptchaProvider extends AbstractServiceProvider
{
    /**
     * Returns a boolean if checking whether this provider provides a specific
     * service or returns an array of provided services if no argument passed.
     *
     * @return array
     */
    public function provides()
    {
        return ['recaptcha'];
    }

    public function register()
    {
        $this->registerAgent();
    }

    protected function registerAgent()
    {
        $this->getContainer()->share(
            'recaptcha',
            function () {
                $agent = NewRelic::getAgent();
                return $agent;
            }
        );
    }

}