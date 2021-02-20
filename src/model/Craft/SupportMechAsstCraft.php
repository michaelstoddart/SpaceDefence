<?php
declare(strict_types=1);

namespace model\Craft;

use model\Craft\SupportCraft;

/**
 * Class representing a Mechanical Assistance Craft
 */
class SupportMechAsstCraft extends SupportCraft
{
    /**
     * Requests the Mechanical Assistance craft to provide assistance to the specified craft
     * 
     * @param FleetCraft $craft the craft to assist
     * @return bool $available returns true if request can be provided
     */
    public function assistRequest (FleetCraft $craft) : bool {
        $isAvailable = false;
        return $isAvailable;
    }
   
}