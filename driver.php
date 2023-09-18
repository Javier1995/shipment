<?php
class Driver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameLength()
    {
        return strlen($this->name);
    }
}