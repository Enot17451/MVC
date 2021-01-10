<?php

class View
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name;
    }
}