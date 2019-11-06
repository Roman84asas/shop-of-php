<?php


namespace core\base\settings;


class ShopSettings
{
    static private $_instance;
    private $baseSettings;

    private function __construct()
    {

    }

    private function __clone()
    {

    }


    static public function get($prop)
    {
        return self::instance()->$prop;
    }

    static public function instance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::$_instance->baseSettings = Setting::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());

        return self::$_instance = new self();
    }
}