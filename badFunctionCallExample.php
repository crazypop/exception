<?php
class Image
{
    public function __construct()
    {
        if (!extension_loaded('gd'))
        {
            throw new BadFunctionCallException('GD extension is not loaded.');
        }
    }
}

$image = new Image();