<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config/config.php';
require __DIR__ . '/../app/config/routes.php';

if (getenv('APPLICATION_ENV') == 'development') {
    SassCompiler::run("../app/resources/scss/", "css/");
}

\Flight::start();
