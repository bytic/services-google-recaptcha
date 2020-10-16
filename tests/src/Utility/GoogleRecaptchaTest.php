<?php

namespace ByTIC\GoogleRecaptcha\Tests\Utility;

use ByTIC\GoogleRecaptcha\RecaptchaManager;
use ByTIC\NewRelic\NewRelicAgent;
use ByTIC\GoogleRecaptcha\Tests\AbstractTest;
use ByTIC\GoogleRecaptcha\Utility\GoogleRecaptcha;
use Dotenv\Dotenv;
use Mockery;

/**
 * Class GoogleRecaptchaTest
 * @package ByTIC\NewRelic\Tests\Utility
 */
class GoogleRecaptchaTest extends AbstractTest
{

    public function test_initFromEnviroment()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(TEST_FIXTURE_PATH, '.env.generic');
        $dotenv->load();

        $manager = GoogleRecaptcha::getManager();

        static::assertInstanceOf(RecaptchaManager::class, $manager);
        self::assertTrue( $manager->isEnabled());
        self::assertSame('my-key', $manager->getSiteKey());
        self::assertSame('my-secret', $manager->getSecretKey());
    }
}
