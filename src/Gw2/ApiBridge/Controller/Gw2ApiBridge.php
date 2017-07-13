<?php

namespace Gw2\ApiBridge\Controller;

use Flight;
use GuzzleHttp\Client as Guzzle;

class Gw2ApiBridge
{
    static public function guildTreasury()
    {
        $gw2Api = Flight::get('gw2.api_endpoint');
        $apiToken = Flight::get('gw2.api_token');

        $guildId = Flight::get('gw2.guild_id');

        $client = new Guzzle();
        $ret = $client->request('GET', $gw2Api . '/' . "guild/$guildId/treasury", [
            'headers' =>
                [
                    'Authorization' => "Bearer {$apiToken}",
                ],
        ]);

        return json_decode($ret->getBody()->getContents());
    }
}