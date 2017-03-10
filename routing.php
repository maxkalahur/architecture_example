<?php

$routs = ['catalog', 'product'];

$_action = null;
$_subAction = null;
$_id = null;

if( $_SERVER['REQUEST_URI'] != '/' ) {
    $url =  parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
    $urlArray = explode('/',$url['path']);
    $urlArray = array_filter($urlArray);
    $_action = $urlArray[1];
    if( isset($urlArray[2]) ) {
        if(is_numeric($urlArray[2])){
            $_id = $urlArray[2];
        }
        else $_subAction = $urlArray[2];
    }
    if( !in_array( $_action, $routs ) ) {
        $_action = null;
        $_subAction = null;
    }
}
else {
    $_action = 'main';
}

echo '<br/>$_action = ' . $_action;
echo '<br/>$_subAction = ' . $_subAction;
echo '<br/>$_id = ' . $_id;
echo '<hr/>';
