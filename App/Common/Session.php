<?php

namespace App\Common;

use app\Http\Controller\Auth\LoginController;

class Session
{
    private static int $id;
    private static string $name;
    private static string $section;
    private static string $yearLevel;
    private static string $location;
    private static string $aboutMe;

    public static function initiate($id)
    {
        // You can implement the initiation logic here if needed.
    }

    public static function getID()
    {
        return self::$id;
    }

    public static function getName()
    {
        return self::$name;
    }

    public static function getSection()
    {
        return self::$section;
    }

    public static function getYearLevel()
    {
        return self::$yearLevel;
    }

    public static function getLocation()
    {
        return self::$location;
    }

    public static function getAboutMe()
    {
        return self::$aboutMe;
    }
}
