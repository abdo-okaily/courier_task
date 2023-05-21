<?php

namespace App\Shipping\Couriers\One;

use App\Interfaces\ShippingIntegration;

class CourierOne implements ShippingIntegration
{

    /**
     * Start Shipping Process ...
     */
    public function createShipment($data)
    {
        self::createShipmentAndGetWaybill($data);
    }

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber)
    {
        self::getShipmentTrackingDetails($trackingNumber);
    }

    private function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data <br>";
    }

    private function getShipmentTrackingDetails($trackingNumber)
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
