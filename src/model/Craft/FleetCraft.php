<?php
declare(strict_types=1);

namespace model\Craft;

/**
 * Class representing the top class any Craft in the fleet. 
 * All craft inherit from FleetCraft
 */
class FleetCraft
{

    private int $x = 0, $y = 0; // current coordinates


    /**
     * Moves the craft to the specified coordinates provided
     * they are free and that they are within the map area
     * 
     * @param int $x x coordinate
     * @param int $y y coordinate
     * @return bool $success returns true if successfully moved
     */
    public function moveTo(int $x, int $y) : bool {
        $this->x = $x;
        $this->y = $y;
        return true; // should check here if free
    }

    /**
     * Gets the current position of the craft
     * 
     * @return array(int $x, int $y) x and y coordinates of the craft
     */
    public function getPosition() : array {
        return [$x, $y];
    }
}