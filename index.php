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

DEBUG ? ini_set("display_error", 1) : ini_set("display_error", 0); 

$ACTIONS        = [];
$FILTERS        = [];


# It is going to help to split the url in the clean and the sense.
$APP['URL']     = split_url($_GET['url'] ?? "home");  


# laoding plugins 
$PLUGINS = get_plugin_folders();

if(!load_plugins($PLUGINS)){
    die("<center><h1>No plugins found ! please put al least one plugins</h1></center>");
}


$app = new App();
$app->index();