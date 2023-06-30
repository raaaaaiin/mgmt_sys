<?php

namespace App\Common;

class Route
{
    private static $routes = [];
    private static $matches = false;
    public static function get($path, $action)
    {
        self::$routes[$path] = $action;
    }
    public static function dispatch()
    {
        $url = self::getAbsolute();
        foreach (self::$routes as $route => $action) {
            if ($url === $route) {
                self::$matches = true;
                @$controller = new $action[0]();
                @$controller->{$action[1]}();
                return;
            }
        }
        self::$matches = false;
    }
    public static function getAbsolute(): string
    {
        $request = $_SERVER['REQUEST_URI'];
        $removeRoot = str_replace('/mgmt_sys/', '', $request);
        $curdir = dirname($_SERVER['REQUEST_URI']);
        $baseUri = str_replace($curdir, '', $request);
        $absolute = basename(parse_url($removeRoot, PHP_URL_PATH));
        return $absolute;
    }
    public static function fallback($path, $action): void
    {
        if(self::$matches == false){
            @$controller = new $action[0]();
            @$controller->{$action[1]}();
        }else{
        }
    }
}
