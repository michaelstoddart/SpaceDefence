<?php
declare(strict_types=1);

namespace model\Craft;

use model\craft\FleetCraft;
use model\Equipment\MedicalUnit;

/**
 * Class from which all Support Craft are derived. 
 */
class SupportCraft extends FleetCraft
{
    private MedicalUnit $medicalUnit;
   
}