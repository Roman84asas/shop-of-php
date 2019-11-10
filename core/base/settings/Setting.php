<?php

namespace core\base\settings;


class Setting
{
    private function __construct()
    {

    }

    private function __clone()
    {

    }

    static private $_instance;

    private $routes = [
        'admin'    => [
            'name'   => 'admin',
            'path'   => 'core/admin/controllers/',
            'hrUrl'  => false,
        ],
        'settings' => [
            'path'   => 'core/base/settings/',
        ],
        'plugins'  => [
            'path'   => 'core/plugins/',
            'hrUrl'  => false,
        ],
        'user'     => [
            'path'   => 'core/user/controllers/',
            'hrUrl'  => true,
            'routes' => [

            ]
        ],
        'default'  =>[
            'controller'   => 'IndexController',
            'inputMethod'  => 'inputData',
            'outputMethod' => 'outputData',
        ]
    ];

    private $templateArr = [
        'text'      => ['name', 'phone', 'address'],
        'textarea' => ['content', 'keywords']
    ];

    static public function get($prop)
    {
        return self::instance()->$prop;
    }

    static public function instance()
    {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

    public function clueProperties ($class)
    {
        $baseProperties = [];

        foreach($this as $name => $item) {
            $property = $class::get($name);

            if (is_array($property) && is_array($item)) {
                $newProperty = array_replace_recursive($this->$name, $property);
                $baseProperties[$name] = $newProperty;
            }
        }

    }

    public function arr_merge_recursive(){
        $arrays = func_get_args();
        $base = array_shift($arrays);

        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_array($value) && is_array($base[$key])) {

                }
            }
        }
    }

}