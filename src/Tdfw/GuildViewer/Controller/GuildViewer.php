<?php

namespace Tdfw\GuildViewer\Controller;

use Flight;
use Gw2\ApiBridge\Controller\Gw2ApiBridge;

// @TODO: Move to an helper controller or autoload
if (!function_exists('view')) {
    function view($template, $data = [])
    {
        $loader = new \Twig_Loader_Filesystem(Flight::get('flight.views.path'));
        $twig = new \Twig_Environment($loader, array('debug' => true));
        // Extension enables the Twig function dump()
        $twig->addExtension(new \Twig_Extension_Debug());
        echo $twig->render($template, $data);
    }
}

class GuildViewer
{
    static public function index()
    {
        view('index.html.twig', array());
    }

    static public function treasury()
    {
        $guildTreasury = Gw2ApiBridge::guildTreasury();

        view('treasury.html.twig', array(
            'guildTreasury' => $guildTreasury
        ));
    }

  static public function upgrades() {
    $guildUpgrades = Gw2ApiBridge::guildUpgrades();

    view('upgrades.html.twig', [
      'guildUpgrades' => $guildUpgrades
    ]);
  }
}