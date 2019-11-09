<?php


namespace core\base\controllers;

use core\base\settings\Setting;
use core\base\settings\ShopSettings;


class RouteController
{
    static private $_instance;



    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    static public function getInstance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    private function __construct()
        {
        $s = Setting::get('routes');
        $al = ShopSettings::get('templateArr');
    }
}