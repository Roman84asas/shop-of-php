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

    private $templateArr = [
        'text'      => ['price', 'short'],
        'textarea' => ['goods_content']
    ];

    static public function get($prop)
    {
        return self::instance()->$prop;
    }

    /**
     * @return ShopSettings
     */
    static public function instance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::$_instance = new self;
        self::$_instance->baseSettings = Setting::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());

        return self::$_instance;
    }
}