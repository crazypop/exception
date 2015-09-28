<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 5:03 PM
 */

function myException($exception) {
    echo "Exception: " . $exception->getMessage() . "\n";
}

set_exception_handler('myException');

throw new Exception("Uncaught Exception occurred\n");