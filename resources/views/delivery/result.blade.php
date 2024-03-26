@extends('delivery.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Delivery Calculation Result</h1>
    <p class="text-lg mb-4">Price: ${{ $price }}</p>
    <p class="text-lg">Method: {{ $method }}</p>
@endsection
