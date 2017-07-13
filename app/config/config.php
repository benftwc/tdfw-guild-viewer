<?php

//Configure your application.
Flight::set('gw2.guild_id', "9E4E5390-6048-E711-80D3-E4115BD7186D");
Flight::set('gw2.guild_name', "Turn Down For Wipe");
Flight::set('gw2.api_token', "9525EA30-7A1F-5A4E-B94D-440F4FAA13D0D4863785-5C94-46DA-826C-4E7C2BEC26FB");
Flight::set('gw2.api_endpoint', "https://api.guildwars2.com/v2");

//Settings for Flight.
Flight::set('flight.views.path', __DIR__ . '/../resources/views');
// @TODO: Edit in custom view function to use it
//Flight::set('flight.views.extension', '.html.twig');
Flight::set('flight.log_errors', true);