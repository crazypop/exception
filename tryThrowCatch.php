<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 4:39 PM
 */

//create function with an exception
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }

    return 1 / $x;
}

//trigger exception in a "try" block
try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

// Continue execution
echo "Hello World\n";