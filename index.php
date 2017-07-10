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

Flight::set('tdfw.guild_id', "9E4E5390-6048-E711-80D3-E4115BD7186D");
Flight::set('tdfw.guild_name', "Turn Down For Wipe");
Flight::set('tdfw.api_token', "9525EA30-7A1F-5A4E-B94D-440F4FAA13D0D4863785-5C94-46DA-826C-4E7C2BEC26FB");
Flight::set('tdfw.api_endpoint', "https://api.guildwars2.com/v2");

Flight::start();