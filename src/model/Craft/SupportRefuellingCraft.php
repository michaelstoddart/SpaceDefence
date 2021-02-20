<?php
declare(strict_types=1);

namespace model\Craft;

use model\Craft\SupportCraft;

/**
 * Class representing a Refuelling Support Craft
 */
class SupportRefuellingCraft extends SupportCraft
{
    /**
     * Orders the refuelling craft to refuel the specified craft
     * 
     * @param FleetCraft $craftthe craft to refuel
     * @return bool $success returns true id successfully refuelled
     */
    public function refuel(FleetCraft $craft) : bool {
        $success = false;
        return $success;
    }
   
}