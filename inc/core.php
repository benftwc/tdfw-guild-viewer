<?php

function getPageRenderer() {
//  return getTreasury("9E4E5390-6048-E711-80D3-E4115BD7186D");
//  return getUpgrades("229");
//  return getItemDetails(2322);
}

function getTreasury($guildId) {
  return callAPI("guild/$guildId/treasury");
}

function getItemDetails($itemId) {
  return callAPI("items/" . $itemId);
}

function getUpgrades($upgradeId) {
  return callAPI("guild/upgrades/$upgradeId");
}

function callAPI($endpoint) {
  $arena_net_api = 'https://api.guildwars2.com/v2';
  $guild_token = '9525EA30-7A1F-5A4E-B94D-440F4FAA13D0D4863785-5C94-46DA-826C-4E7C2BEC26FB';
  $client = new \GuzzleHttp\Client();
  $res = $client->request('GET', $arena_net_api . '/' . $endpoint, [
    'headers' =>
      [
        'Authorization' => "Bearer {$guild_token}",
      ],
  ]);
  echo $res->getStatusCode();
  // 200
  echo $res->getHeaderLine('content-type');
  // 'application/json; charset=utf8'
  echo $res->getBody();
  // '{"id": 1420053, "name": "guzzle", ...}'

}