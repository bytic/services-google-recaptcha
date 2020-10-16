<?php

namespace ByTIC\GoogleRecaptcha\Tests\Fixtures\Forms;

use ByTIC\GoogleRecaptcha\Forms\FomHasRecaptchaTrait;

/**
 * Class ContactForm
 * @package ByTIC\GoogleRecaptcha\Fixtures\Forms
 */
class ContactForm extends \Nip\Form\AbstractForm
{
    use FomHasRecaptchaTrait;

    public function init()
    {
        parent::init();

        $this->setAttrib('id', 'contact-form');

        $this->addInput('name', 'name', true);

        $this->addButton('send', 'send');

        $this->initRecaptcha();
    }
}
