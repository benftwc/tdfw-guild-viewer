<?php

//Settings for Flight.
\Flight::set('flight.base_url ', NULL);        // Override the base url of the request . (default: NULL)
\Flight::set('flight.case_sensitive ', FALSE);  // Case sensitive matching for URLs . (default: FALSE)
\Flight::set('flight.handle_errors ', TRUE);   // Allow Flight to handle all errors internally . (default: TRUE)
\Flight::set('flight.log_errors ', FALSE);      // Log errors to the web server's error log file. (default: false)
\Flight::set('flight.views.path', __DIR__ . '/../resources/views');
\Flight::set('flight.views.extension', ".php");