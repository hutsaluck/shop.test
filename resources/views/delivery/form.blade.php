@extends('delivery.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Delivery Calculator</h1>
    <form action="{{ route('calculate.delivery') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
            <input type="text" name="weight" id="weight" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="length" class="block text-sm font-medium text-gray-700">Length (cm):</label>
            <input type="text" name="length" id="length" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="width" class="block text-sm font-medium text-gray-700">Width (cm):</label>
            <input type="text" name="width" id="width" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="height" class="block text-sm font-medium text-gray-700">Height (cm):</label>
            <input type="text" name="height" id="height" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="seller_price" class="block text-sm font-medium text-gray-700">Seller's Price (optional):</label>
            <input type="text" name="seller_price" id="seller_price" class="text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="h-10 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Calculate
            </button>
        </div>
    </form>
@endsection
