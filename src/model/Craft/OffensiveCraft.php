<?php
declare(strict_types=1);

namespace Craft;

use model\Craft\FleetCraft;

/**
 * Class from which all Offensive Craft are derived. 
 */
class OffensiveCraft extends FleetCraft
{
    private int $numCannon = 0; // this number is overridden in the derived classes
    private bool $shieldsRaised = false;

    /**
     * Causes the craft to attack, firing all its cannon
     */
    public function attack() {

    }

     /**
     * Causes the craft to raise its shields
     * 
     * @return void
     */
    public function raiseShields() : void {
        $this->shieldsRaised = true;
        return;
    }

     /**
     * Causes the craft to lower its shields
     * 
     * @return void
     */
    public function lowerShields() : void {
        return;
    }

    /**
     * Returns true if the shields are raised
     * 
     * @return bool $this->shieldRaised true if the shields are raised
     */
     public function SheildsAreRaised () : bool {
        return $this->shieldsRaised;
    }
   
}