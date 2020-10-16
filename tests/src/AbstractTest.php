<?php

namespace ByTIC\GoogleRecaptcha\Tests;

use ByTIC\GoogleRecaptcha\Utility\GoogleRecaptcha;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTest
 * @package ByTIC\GoogleRecaptcha\Tests
 */
abstract class AbstractTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        GoogleRecaptcha::setConfig(null);
        GoogleRecaptcha::setManager(null);
    }
}
