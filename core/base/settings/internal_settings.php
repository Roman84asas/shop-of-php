<?php

use core\base\exception\RouteExceptions;

defined('VG_ACCESS') or die('Access Denied');


const TEMPLATE       = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views/';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY      = '';
const COOKE_TIME     = 60;
const BLOCK_TIME     = 3;

const QTY       = 8;
const QTY_LINKS = 3;

const ADMIN_CSS_JS = [
    'style'  => [],
    'script' => [],
];
const USER_CSS_JS = [
    'style'  => [],
    'script' => [],
];

/**
 * @param $class_name
 * @throws \core\base\exception\RouteExceptions
 */
function autoloadMainClasses($class_name) {
    $class_name = str_replace('\\', '/', $class_name);

    if (!@include_once $class_name . '.php') {
        throw new RouteExceptions('Error name class required - '.$class_name);
    }

}

spl_autoload_register('autoloadMainClasses');