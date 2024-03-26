<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryRequest;
use App\Models\DeliveryCalculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeliveryController extends Controller
{
    public function store(StoreDeliveryRequest $request)
    {
        $package = new DeliveryCalculator($request->validated());

        $price = $package->calculatePrice();
        $method = $package->getMethodUsed();

        return view('delivery.result', compact('price', 'method'));
    }
}
