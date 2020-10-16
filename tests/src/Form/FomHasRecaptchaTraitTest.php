<?php

namespace ByTIC\GoogleRecaptcha\Tests\Form;

use ByTIC\GoogleRecaptcha\Tests\Fixtures\Forms\ContactForm;
use ByTIC\GoogleRecaptcha\Tests\AbstractTest;

/**
 * Class FomHasRecaptchaTraitTest
 * @package ByTIC\GoogleRecaptcha\Tests\Form
 */
class FomHasRecaptchaTraitTest extends AbstractTest
{
    public function test_initRecaptcha()
    {
        $form = new ContactForm();
        $render = $form->render();
        self::assertIsString($render);
    }
}
