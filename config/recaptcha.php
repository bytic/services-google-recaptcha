<?php

return [
    'enabled' => getenv(\ByTIC\GoogleRecaptcha\Config\ConfigEnv::ENABLED, true),
    'site_key' => getenv(\ByTIC\GoogleRecaptcha\Config\ConfigEnv::SITE_KEY),
    'secret_key' => getenv(\ByTIC\GoogleRecaptcha\Config\ConfigEnv::SECRET_KEY),
];
