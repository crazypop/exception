<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 8/10/15
 * Time: 4:46 PM
 */


//-------------------------------------------//
//-----FINALLY - starting with PHP 5.5-------//
//-------------------------------------------//

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}

// Continue execution
echo "Hello World\n";