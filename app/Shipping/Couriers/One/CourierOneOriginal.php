<?php

namespace App\Shipping\Couriers\One;

class CourierOneOriginal
{
    /**
     * Start Shipping Process ...
     */
    public function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data <br>";
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
    }
}
