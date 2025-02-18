<?php
function requiredInput($input){
        if(empty($input)){
        return true;
        }

        return false;
    }

    function minInput($input,$lenght){
        if(strlen($input) < $lenght) {
        return true;
        }

        return false;
    }

    function maxInput($input,$lenght){
        if(strlen($input) > $lenght) {
        return true;
        }

        return false;
    }

    function sameInput ($value1,$value2){
        if($value1 != $value2){
            return true;
        }
            return false;
        }

    function emailInput($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return true;
        }

        return false;
    }



