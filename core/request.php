<?php 

function getRequestType() {
    return $_SERVER ['REQUEST_METHOD'];
}


function postMethod() {
    if  (getRequestType() == "POST"){
    return true;
}return false; 
}


function reciveInput($value) {
    return trim(html_entity_decode(htmlspecialchars($value)));
}

