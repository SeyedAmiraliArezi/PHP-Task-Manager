<?php
function redirect($url){
    header("Location: $url");
    exit;
}

function random_string($length = 6) {
    $char = '1234567890asdfghjkl;zxcvbnm';
    $resalt = '';
    for($i=0; $i<$length; $i++){
        $rand = rand(0, strlen($char)-1);
        $resalt .= $char[$rand];
    }
    return $resalt;
}