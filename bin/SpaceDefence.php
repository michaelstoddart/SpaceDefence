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
echo "Game starting\n";

define ('X_SIZE', 100);
define ('Y_SIZE', 100);
define ('NUM_SHIPS', 50);

$mapArray = [];

for ($i=0;$i<NUM_SHIPS;$i++) {
    $occupied = true;
    while ($occupied) {
        $x = rand(0, X_SIZE - 1);
        $y = rand(0, Y_SIZE - 1);
        $shipStartCoordinates = [$i, $x, $y];
        if (!in_array($shipStartCoordinates, $mapArray, true)) {
            $mapArray[$i] = [$x, $y];
            $occupied = false;
        }
    }
}

// Create vessels
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

// Allocate the vessels as pairs
$pairs = [];
for ($i=0; $i<(int)(NUM_SHIPS/2); $i++) { // if NUM_SHIPS is odd, the last one is ignored
    $pairs[] = [2*$i, 2*$i+1]; // each pair gives the id of two ships 
}

// For each pair of ships try and get them adjacent
foreach ($pairs as $pair) {
    $x1 = $mapArray[$pair[0]][0];
    $y1 = $mapArray[$pair[0]][1];
    $x2 = $mapArray[$pair[1]][0];
    $y2 = $mapArray[$pair[1]][1];
    $newX1 = (int)(($x1 + $x2) / 2);
    $newY1 = (int)(($y1 + $y2) / 2);
    $newX2 = (int)((($x1 + $x2) / 2) + 1);
    $newY2 = (int)((($y1 + $y2) / 2) + 1);

    if (isOccupied($mapArray, $newX1, $newX2)) {
        if (!isOccupied($mapArray, $newX1 + 1, $newX2)) {
            $newX1 = $newX1 + 1;
        }
    echo (isOccupied($mapArray, $newY1, $newY2)) ? " Y Already occupied\n" : '';
    
    $vessel1 = $vessels[$pair[0]];
    $vessel2 = $vessels[$pair[1]];

    $vessel1->moveTo($newX1, $newY1);
    $vessel2->moveTo($newX2, $newY2);

    $mapArray[$pair[0]] = [$newX1, $newY1];
    $mapArray[$pair[1]] = [$newX2, $newY2];

}

function isOccupied($mapArray, int $x, int $y) : bool {
    foreach ($mapArray as $coordinates) {
        return (($coordinates[0] == $x) && ($coordinates[1] == $y));
    }
}


