<?php

namespace App\Shipping\Couriers\CourierThree\CourierTwoOriginal;

class CourierThreeOriginal
{
    /*createShipmentAndGetWaybill
    registerNumberToGetTrackingDetails
    getTrackingDetails*/

    /**
     * Start Shipping Process ...
     */
    public function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data and way bill is generated <br>";
        die();
    }

    public function registerNumberToGetTrackingDetails()
    {
        echo "Shipment Instructions is Created with This Data <br>";
        die();
    }

    /**
     * Track Shipping Process ...
     */
    public function getTrackingDetails($trackingNumber)
    {
        echo "Shipment details for package no #" . $trackingNumber . " is :<br>";
        echo "<pre dir='ltr'>";
        print_r([
            'id' => $trackingNumber,
            'status' => fake()->randomElement(['deliver', 'On Way','packaging']),
        ]);
        echo "</pre>";
        die();
    }
}
