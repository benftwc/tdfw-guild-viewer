<?php

/*
  Variables utilisées
  guildName > Nom de la guilde concernée (utilisé pour getGuildId)
  apiToken > API du propriétaire de la guilde (celui qui à payé 1PO) — avec droit "guild" actif
  apiEndpoint > endpoint de l'API chez Anet // https://api.guildwars2.com/v2
*/
function getPageRenderer() {
//    return getTreasury("9E4E5390-6048-E711-80D3-E4115BD7186D");
  //  return getUpgrades("229");
  //  return getItemDetails(2322);
    parseItemList([]);
//  return getGuildId();
}

// Méthode buggée -_-
function getGuildId() {
//  $guildName = Flight::get('tdfw.guild_name');
//  $guild_id = callAPI("guild/search?name=" . str_replace(' ', '%20', $guildName));;
  return Flight::get('tdfw.guild_id');
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

function parseItemList($item_ids) {
  $treasury = getTreasury(getGuildId());
  var_dump($treasury);
}

function callAPI($endpoint, $debug = FALSE) {
  $arena_net_api = Flight::get('tdfw.api_endpoint');
  $api_token = Flight::get('tdfw.api_token');
  $client = new \GuzzleHttp\Client();
  $res = $client->request('GET', $arena_net_api . '/' . $endpoint, [
    'headers' =>
      [
        'Authorization' => "Bearer {$api_token}",
      ],
  ]);

  if ($debug) {
    return $res;
  }
  else {
    return $res->getBody();
  }
}