<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shipping\Shipment;

class CourierController extends Controller
{
    private $shipmentService;
    public function __construct()
    {
        $courier = \request()->header('courier');
        //$courier = "One";
        //$courier = "Two";
        //$courier = "Three";
        /*courier must be o n*/
        $this->shipmentService = Shipment::make($courier);
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
