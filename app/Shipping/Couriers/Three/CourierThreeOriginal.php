<?php

namespace App\Shipping\Couriers\Three;

class CourierThreeOriginal
{
    /**
     * Start Shipping Process ...
     */
    public function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data and way bill is generated <br>";
    }

    public function registerNumberToGetTrackingDetails()
    {
        echo "Shipment Register Number for tracking is Generated <br>";
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
    }
}
