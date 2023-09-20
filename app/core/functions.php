<?php 


// The function is split the url into the individual and called it back
// into the index.php as an array as $APP["URL"];
function split_url(){
    $url = 'home';
    return explode("/", $url);
}

// This function is for grabing the single url array from the $APP["URL"]
function URL($key = ""){
    global $APP;

    if(!empty($key)){
        if(!empty($APP['URL'])){
            return $APP['URL'][$key];
        }
    }else{
        return $APP['URL'];
    }
    return "";
}