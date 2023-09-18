<?php

require_once './driver.php';
require_once './shipment.php';

echo "------------------------------------------------------------------------------------------------".PHP_EOL;
// Read the input files
$destinations = file('addresses.txt', FILE_IGNORE_NEW_LINES);
$drivers = file('drivers.txt', FILE_IGNORE_NEW_LINES);

$shipments = [];
$driverObjects = [];

// Create shipment objects
foreach ($destinations as $destination) {
    $shipments[] = new Shipment($destination);
}

// Create driver objects
foreach ($drivers as $driverName) {
    $driverObjects[] = new Driver($driverName);
}

// Assign shipments to drivers to maximize suitability score
foreach ($shipments as $shipment) {
    $maxScore = 0;
    $selectedDriver = null;

    foreach ($driverObjects as $driver) {
        $shipment->assignDriver($driver);
        $score = $shipment->getSuitabilityScore();

        if ($score > $maxScore) {
            $maxScore = $score;
            $selectedDriver = $driver;
        }
    }

    if ($selectedDriver !== null) {
        echo "Assigned Driver: " . $selectedDriver->getName() . ", Destination: " . $shipment->getDestination() . PHP_EOL;
    }
}

$totalSuitabilityScore = array_sum(array_map(function ($shipment) {
    return $shipment->getSuitabilityScore();
}, $shipments));

echo "----------------------------------------------------------------------------------------------------------------------------".PHP_EOL;
echo "Total Suitability Score: " . $totalSuitabilityScore . PHP_EOL;
