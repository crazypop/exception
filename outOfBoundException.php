<?php
/**
 * Created by PhpStorm.
 * User: POP
 * Date: 9/28/2015
 * Time: 9:54 PM
 */

class AA implements ArrayAccess {
    private $container = array();

    public function __construct() {
        $this->container = array(
            "one"   => 1,
            "two"   => 2,
            "three" => 3,
        );
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        if(!isset($this->container[$offset])) {
            throw new OutOfBoundsException("The offset '$offset' is out of bounds");
        }

        return $this->container[$offset];
    }
}


$a = new AA();
$val = $a->offsetGet("three");
//$val = $a->offsetGet(3);
var_dump($val);

