<?php

define('VG_ACCESS', true);

header('Content-Type: text/html; charset=utf-8');
session_start();


include_once 'config.php';
include_once 'core/base/settings/internal_settings.php';
require_once 'libraries/functions.php';


use \core\base\controllers\RouteController;
use \core\base\exception\RouteExceptions;

try {
    //RouteController::getInstance()->route();
    RouteController::getInstance();

}
catch (RouteExceptions $exception){
    exit($exception->getMessage());
}