<?php

return [
    // Debug mode will echo connection status alerts to
    // the screen throughout the email sending process.
    // Very helpful when testing your credentials.
    'debug_mode' => false,
    'host' => '',
    'port' => '',
    'secure' => null, // null, 'ssl', or 'tls'
    'auth' => true, // true if authorization required
    'username' => '',
    'password' => '',
    // NERD ONLY VARIABLE: You may want to change the origin
    // of the HELO request, as having the default value of
    // "localhost" may cause the email to be considered spam.
    // http://stackoverflow.com/questions/5294478/significance-of-localhost-in-helo-localhost
    'localhost' => 'localhost', // rename to the URL you want as origin of email
];
