<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 4:38 PM
 */

//create function with an exception
function checkNum($number) {
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//trigger exception
checkNum(2);