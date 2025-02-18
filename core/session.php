<?php

 

function sessionStore($key,$value) {

     $_SESSION[$key] = $value;
}

function sessionget($key) {
    return $_SESSION[$key] ?? [];
}


function removesession($key) {
    if (isset($_SESSION[$key])){
        unset($_SESSION[$key]);
    }
}

