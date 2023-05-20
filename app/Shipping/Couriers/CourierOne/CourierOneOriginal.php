<?php

namespace App\Shipping\Couriers\CourierOne\CourierOneOriginal;

class CourierOneOriginal
{
    /**
     * Start Shipping Process ...
     */
    public function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data <br>";
        echo "<pre dir='ltr'>";
        print_r($data);
        echo "</pre>";
        die();
    }

    /**
     * Track Shipping Process ...
     */
    public function getShipmentTrackingDetails($trackingNumber)
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
