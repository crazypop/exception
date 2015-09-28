<?php
/**
 * Created by PhpStorm.
 * User: vasilepop
 * Date: 9/28/15
 * Time: 8:17 PM
 */

function tripleInteger($int)
{
    if(!is_int($int))
        throw new InvalidArgumentException('tripleInteger function only accepts integers. Input was: '.$int);
    echo $int * 3 . "\n";

    return true;
}

$x = tripleInteger(4); //$x == 12
$x = tripleInteger(2.5); //exception will be thrown as 2.5 is a float
$x = tripleInteger('foo'); //exception will be thrown as 'foo' is a string
$x = tripleInteger('4'); //exception will throw as '4' is also a string
