<?php

namespace ByTIC\GoogleRecaptcha\Forms;

use ByTIC\GoogleRecaptcha\Utility\GoogleRecaptcha;

/**
 * Trait FomHasRecaptchaTrait
 * @package ByTIC\GoogleRecaptcha\Forms
 */
trait FomHasRecaptchaTrait
{
    protected function initRecaptcha()
    {
        $this->addHidden('recaptchaResponse', 'recaptchaResponse', false);
        $this->getElement('recaptchaResponse')->setId('recaptchaResponse');
    }

    protected function processValidationRecaptcha()
    {
        $resp = GoogleRecaptcha::getManager()->verify($_POST['recaptchaResponse']);
        if (!$resp->isSuccess()) {
            $errors = $resp->getErrorCodes();
            $this->addError("Eroare validare email. Va rugam sa mai incercati!");
        }
    }
}