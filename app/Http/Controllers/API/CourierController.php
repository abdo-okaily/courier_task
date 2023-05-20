<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ShippingIntegration;

class CourierController extends Controller
{
    private $shipmentService;
    public function __construct(ShippingIntegration $shipmentService)
    {
        $this->shipmentService = $shipmentService;
    }

    public function createShipment(Request $request)
    {
        // Call the createShipment method using the appropriate courier implementation
        $this->shipmentService->createShipment($request->all());
        // ...
    }

    public function trackShipment($trackingNumber)
    {
        // Call the trackShipment method using the appropriate courier implementation
        $this->shipmentService->trackShipment($trackingNumber);
        // ...
    }
}
