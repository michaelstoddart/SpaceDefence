<?php
declare(strict_types=1);

namespace model\Craft;

use model\Craft\OffensiveBattleshipCraft;

/**
 * Class representing the Command Battleship Offensive Craft
 * This follows a Singleton pattern as there can only be one of these
 */

final class OffensiveCommandBattleshipCraft extends OffensiveBattleshipCraft
{
    private static ?OffensiveCommandBattleshipCraft $instance = null;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): OffensiveCommandBattleshipCraft
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }

}