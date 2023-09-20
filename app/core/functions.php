<?php 


// The function is split the url into the individual and called it back
// into the index.php as an array as $APP["URL"];
function split_url($url){
    return explode("/", trim($url, "/"));
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

// load the folder to check if there is plugin there 
function get_plugin_folders():array{
    $plugin_folder = "plugins/";
    $folders = scandir($plugin_folder);
    $res = [];
    foreach ($folders as $folder) {
        if($folder != "." && $folder != ".." && is_dir($plugin_folder . $folder)){
            $res[] = $folder;
        }
    }
    return $res;
}

// Check if there is any folder in plugins or not
function load_plugins(array $plugin_folder){
    $found = false;
    foreach ($plugin_folder as $folder) {
        $found = true;
    }
    return $found;
}