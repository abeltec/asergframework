<?php 

session_start();
$minphpVersion = '8.0';
if($minphpVersion > phpversion()){
    die("The php version must be greater than ". $minphpVerion);
} 
require "config.php";