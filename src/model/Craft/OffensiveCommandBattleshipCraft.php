<?php
declare(strict_types=1);

namespace Craft;

use model\Craft\OffensiveBattleshipCraft;

/**
 * Class representing the Command Battleship Offensive Craft
 * This follows a Singleton pattern as there can only be one of these
 */


    final class OffensiveCommandBattleshipCraft
{
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): OffensiveCommandBattleshipCraft
    {
        if (null === static::$instance) {
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