@extends('layouts.index')

@section('content')
    <div class="container mx-auto mt-10">
        <div class="flex flex-col my-10 shadow-md sm:flex-row">
            <div class="px-10 py-10 bg-white sm:w-3/4">
                <div class="flex justify-between pb-8 border-b">
                    <h1 class="text-2xl font-semibold">Shopping Cart</h1>
                    <h2 class="text-2xl font-semibold">{{ Cart::count() }} Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="w-2/5 text-xs font-semibold text-gray-600 uppercase">Product Details</h3>
                    <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Quantity</h3>
                    <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Price</h3>
                    <h3 class="w-1/5 text-xs font-semibold text-center text-gray-600 uppercase">Total</h3>
                </div>
                @foreach (Cart::content() as $item)
                    <div class="flex items-center px-6 py-5 -mx-8 hover:bg-gray-100">
                        <div class="flex w-2/5">
                            <!-- product -->
                            <div class="w-20">
                                <img class="h-24"
                                    src='{{ asset('storage/' . App\Models\Product::find($item->id)->img) }}' alt="">
                            </div>
                            <div class="flex flex-col justify-between flex-grow ml-4">
                                <span class="text-sm font-bold">{{ $item->name }}</span>
                                <span
                                    class="text-xs text-red-500">{{ App\Models\Product::find($item->id)->category->name }}</span>
                                <a href="#" class="text-xs font-semibold text-gray-500 hover:text-red-500">Remove</a>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">
                            <a href="">
                                <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512">
                                    <path
                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                </svg>
                            </a>

                            <input class="w-8 mx-2 text-center border" type="text" value="{{ $item->qty }}" readonly>

                            <a href="">
                                <svg class="w-3 text-gray-600 fill-current" viewBox="0 0 448 512">
                                    <path
                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                </svg>
                            </a>
                        </div>
                        <span class="w-1/5 text-sm font-semibold text-center">${{ $item->price }}</span>
                        <span class="w-1/5 text-sm font-semibold text-center">${{ $item->price * $item->qty }}</span>
                    </div>
                @endforeach


                <a href="{{ route('store') }}" class="flex mt-10 text-sm font-semibold text-indigo-600">

                    <svg class="w-4 mr-2 text-indigo-600 fill-current" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="px-8 py-10 sm:w-1/4">
                <h1 class="pb-8 text-2xl font-semibold border-b">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="text-sm font-semibold uppercase">Items {{ Cart::count() }}</span>
                    <span class="text-sm font-semibold">{{ Cart::total() }}$</span>
                </div>
                <div>
                    <label class="inline-block mb-3 text-sm font-medium uppercase">Shipping</label>
                    <select class="block w-full p-2 text-sm text-gray-600">
                        <option>Standard shipping - $10.00</option>
                    </select>
                </div>
                <div class="py-10">
                    <label for="promo" class="inline-block mb-3 text-sm font-semibold uppercase">Promo Code</label>
                    <input type="text" id="promo" placeholder="Enter your code" class="w-full p-2 text-sm">
                </div>
                <button class="px-5 py-2 text-sm text-white uppercase bg-red-500 hover:bg-red-600">Apply</button>
                <div class="mt-8 border-t">
                    <div class="flex justify-between py-6 text-sm font-semibold uppercase">
                        <span>Total cost</span>
                        <span>${{ Cart::total() }}</span>
                    </div>
                    @if (Cart::count() > 0)
                        <a href="{{ route('checkout') }}"
                            class="inline-block w-full py-3 text-sm font-semibold text-center text-white uppercase bg-indigo-500 rounded-md disabled: hover:bg-indigo-600">Checkout</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
