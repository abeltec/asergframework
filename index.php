<?php

use Core\App;

session_start();


$minphpVersion = '8.0';
if($minphpVersion > phpversion()){
    die("The php version must be greater than ". $minphpVerion);
}


define('DS', DIRECTORY_SEPARATOR);
define('ROOTPATH', __DIR__.DS);

require "config.php";
require "app".DS."core".DS."init.php";

$ACTIONS        = [];
$FILTERS        = [];
$APP['URL']     = split_url();  # It is going to help to split the url in the clean and the sense.

echo "<pre>";
    print_r($APP);
die;

$app = new App();
$app->index();