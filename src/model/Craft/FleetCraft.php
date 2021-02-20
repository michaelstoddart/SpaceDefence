<?php
declare(strict_types=1);

namespace Craft;

/**
 * Class representing the top class any Craft in the fleet. 
 * All craft inherit from FleetCraft
 */
class FleetCraft
{

    private int $x, $y; // current coordinates


    /**
     * Moves the craft to the specified coordinates provided
     * they are free and that they are within the map area
     * 
     * @param int $x x coordinate
     * @param int $y y coordinate
     * @return bool $success returns true if successfully moved
     */
    public function moveTo(int $x, int $y) : bool {
        $success = false;
        return $success;
    }
}