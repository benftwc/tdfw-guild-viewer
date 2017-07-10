<?php

require 'vendor/autoload.php';
require 'inc/core.php';



Flight::route('/', function() {
  print getPageRenderer();
});

Flight::set('flight.base_url ', NULL);        // Override the base url of the request . (default: NULL)
Flight::set('flight.case_sensitive ', FALSE);  // Case sensitive matching for URLs . (default: FALSE)
Flight::set('flight.handle_errors ', TRUE);   // Allow Flight to handle all errors internally . (default: TRUE)
Flight::set('flight.log_errors ', FALSE);      // Log errors to the web server's error log file. (default: false)
Flight::set('flight.views.path', "./views");       // Directory containing view template files. (default: ./views)
Flight::set('flight.views.extension', ".php");  // View template file extension. (default: .php)

Flight::start();