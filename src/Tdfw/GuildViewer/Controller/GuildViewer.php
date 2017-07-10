<?php

namespace Tdfw\GuildViewer\Controller;

class GuildViewer {

  static public function index() {
    \Flight::render('index', [], 'content');
    \Flight::render('layout', []);
  }

  //    function getPageRenderer() {
  //        //  return getTreasury("9E4E5390-6048-E711-80D3-E4115BD7186D");
  //        //  return getUpgrades("229");
  //        //  return getItemDetails(2322);
  //        parseItemList([]);
  //    }
  //
  //    function getGuildId($guildName) {
  //        return callAPI("guild/search?name=" . urlencode($guildName));
  //    }
  //
  //    function getTreasury($guildId) {
  //        return callAPI("guild/$guildId/treasury");
  //    }
  //
  //    function getItemDetails($itemId) {
  //        return callAPI("items/" . $itemId);
  //    }
  //
  //    function getUpgrades($upgradeId) {
  //        return callAPI("guild/upgrades/$upgradeId");
  //    }
  //
  //    function parseItemList($item_ids) {
  //        $guilde = "9E4E5390-6048-E711-80D3-E4115BD7186D";
  //        $treasury = json_decode(getTreasury($guilde));
  //        var_dump($treasury);
  //    }
  //
  //    function callAPI($endpoint, $debug = FALSE) {
  //        $arena_net_api = 'https://api.guildwars2.com/v2';
  //        $guild_token = '9525EA30-7A1F-5A4E-B94D-440F4FAA13D0D4863785-5C94-46DA-826C-4E7C2BEC26FB';
  //        $client = new \GuzzleHttp\Client();
  //        $res = $client->request('GET', $arena_net_api . '/' . $endpoint, [
  //            'headers' =>
  //                [
  //                    'Authorization' => "Bearer {$guild_token}",
  //                ],
  //        ]);
  //
  //        if ($debug) {
  //            return $res;
  //        }
  //        else {
  //            return $res->getBody();
  //        }
  //    }
}