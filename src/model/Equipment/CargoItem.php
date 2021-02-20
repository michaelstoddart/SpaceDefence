<?php
declare(strict_types=1);

// namespace model\sEquipment;

/**
 * An item of cargo that can be loaded on a cargo support craft
 */
class CargoItem
{
    private $xDimension, $yDimension, $zDimension; //size of cargo item
    private $weight; // weight of cargo item

    /**
     * Constructs a cargo item
     * 
     * @param float $x x dimension of cargo
     * @param float $y y dimension of cargo
     * @param float $z z dimension of cargo
     * @param float $weight weight of cargo
     */
    public function __construct(float $x, float $y, float $z, float $weight) {
        $this->xDimension = $x;
        $this->yDimension = $y;
        $this->zDimension = $z;
        $this->weight = $weight;
    }
   
}