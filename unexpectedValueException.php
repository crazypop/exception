<?php

/**
 * Created by PhpStorm.
 * User: POP
 * Date: 9/28/2015
 * Time: 9:42 PM
 */
class unexpectedValueException
{
    const TYPE_FOO = 'foo';
    const TYPE_BAR = 'bar';

    public function doSomething($x) {
        if($x != self::TYPE_FOO || $x != self::TYPE_BAR) {
            throw new UnexpectedValueException('Parameter must be one of the TYPE_* constants');
        }
    }
}

$doSomething = new UnexpectedValueException();
$doSomething->doSomething("blabla");