<?php

namespace App\Interfaces\ShippingIntegration;

interface ShippingIntegration
{
    /**
     * Start Shipping Process ...
     */
    public function createShipment(array $data);

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber);
}
