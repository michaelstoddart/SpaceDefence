<?php
declare(strict_types=1);

namespace Craft;

use model\Craft\SupportCraft;
use model\Equipment\CargoItem;

/**
 * Class representing a Cargo Support Craft
 */
class SupportCargoCraft extends SupportCraft
{
    private $currentCargo = []; // array of objects in cargo

    /**
     * Adds an item of cargo.
     * 
     * @param CargoItem // the cargo item to be added
     * @return bool $successfullyAdded // true if succesfully added
     */
    public function addCargo(CargoItem $cargoObject) : bool {
        $this->currentCargo[] = $cargoObject;
        $successfullyAdded = false;
        return $successfullyAdded;
    }

    /**
     * Returns current cargo
     * 
     * @return array $this->CurrentCargo 
     */
    public function getCurrentCargo() : array {
        return $this->CurrentCargo;
    }
   
}