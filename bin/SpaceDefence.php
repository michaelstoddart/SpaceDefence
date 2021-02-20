#!/usr/bin/env php
<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

use model\Craft\FleetCraft;
use model\Craft\OffensiveBattleshipCraft;
use model\Craft\OffensiveCommandBattleshipCraft;
use model\Craft\OffensiveCraft;
use model\Craft\OffensiveCruiserCraft;
use model\Craft\OffensiveDestroyerCraft;
use model\Craft\SupportCargoCraft;
use model\Craft\SupportCraft;
use model\Craft\SupportMechAsstCraft;
use model\Craft\SupportRefuellingCraft;


echo "Space Defence\n";
echo "Game starting";

define ('X_SIZE', 100);
define ('Y_SIZE', 100);

$mapArray = [];

for ($i=0;$i<50;$i++) {
    $occupied = true;
    while ($occupied) {
        $x = rand(0, X_SIZE - 1);
        $y = rand(0, Y_SIZE - 1);
        $shipStartCoordinates = [$i, $x, $y];
        if (!in_array($shipStartCoordinates, $mapArray, true)) {
            $mapArray[] = $shipStartCoordinates;
            $occupied = false;
        }
    }
}

$vessels = [];
// Create 1 command, 8 refuel, 8 mech asst, 8 cargo, 8 battleship, 8 destroyer and 9 cruisers
foreach ($mapArray as $shipStartCoordinates) {
    if ($shipStartCoordinates[0] == 0) { // one Command Battleship
    $vessels[$shipStartCoordinates[0]] = OffensiveCommandBattleshipCraft::getInstance();
    } 
    else if (($shipStartCoordinates[0] >= 1) && ($shipStartCoordinates[0] < 9)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new SupportRefuellingCraft();
    }
    else if (($shipStartCoordinates[0] >= 9) && ($shipStartCoordinates[0] < 17)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new SupportMechAsstCraft();
    }
    else if (($shipStartCoordinates[0] >= 17) && ($shipStartCoordinates[0] < 25)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new SupportCargoCraft();
    }
    else if (($shipStartCoordinates[0] >= 25) && ($shipStartCoordinates[0] < 33)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new OffensiveBattleshipCraft();
    }
    else if (($shipStartCoordinates[0] >= 33) && ($shipStartCoordinates[0] < 41)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new OffensiveDestroyerCraft();
    }
    else if (($shipStartCoordinates[0] >= 41) && ($shipStartCoordinates[0] < 50)) { // 1}
    $vessels[$shipStartCoordinates[0]] = new OffensiveCruiserCraft();
    }
}
// echo count($vessels);

