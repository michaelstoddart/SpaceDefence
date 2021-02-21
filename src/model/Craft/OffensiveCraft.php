<?php
declare(strict_types=1);

namespace model\Craft;

use model\Craft\FleetCraft;

/**
 * Class from which all Offensive Craft are derived. 
 */
class OffensiveCraft extends FleetCraft
{
    protected int $numCannon = 0; // this number is overridden in the derived classes
    protected bool $shieldsRaised = false;

    /**
     * Causes the craft to attack, firing all its cannon
     */
    public function attack() {
        for ($i = 0; $i < $this->numCannon; $i++) {
            echo "Bang\n";
        }
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
        $this->shieldsRaised = false;
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