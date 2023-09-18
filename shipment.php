<?php

require_once './helper.php';
class Shipment
{
    private $destination;
    private $assignedDriver = null;

    public function __construct($destination)
    {
        $this->destination = $destination;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function assignDriver(Driver $driver)
    {
        if ($this->assignedDriver === null) {
            $this->assignedDriver = $driver;
        }
    }

    public function getSuitabilityScore()
    {
        if (empty($this->assignedDriver)) {
            return 0;
        }

        $destinationLength = strlen($this->destination);
        $driver = $this->assignedDriver;

        $baseSS = 0;

        if ($destinationLength % 2 === 0) {
            $baseSS = 1.5 * preg_match_all('/[aeiou]/i', $driver->getName());
        } else {
            $baseSS = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $driver->getName());
        }

        if (gcd($destinationLength, $driver->getNameLength()) > 1) {
            $baseSS *= 1.5;
        }

        return $baseSS;
    }
}



