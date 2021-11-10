@extends('layouts.index')

@section('content')

    <section class="container grid grid-cols-1 gap-8 px-4 mx-auto sm:grid-cols-2 sm:px-0">
        <article class="py-8">
            <form action="">
                <div class="w-full">
                    <h3 class="my-4 text-2xl font-semibold text-gray-800">Contact Information</h3>
                    <label for="email" class="block text-sm text-gray-500">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" placeholder="your email">
                </div>
                <hr class="my-4">
                <div class="w-full">
                    <h3 class="my-4 text-2xl font-semibold text-gray-800">Shipping information</h3>
                    <div>
                        <label class="block text-sm text-gray-500" for="name">Name</label>
                        <input class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" type="text" id="name"
                            name="name" placeholder="name">

                    </div>
                    <div>
                        <label class="block text-sm text-gray-500" for="address">Address</label>
                        <input class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" type="text" id="address"
                            name="address" placeholder="address">
                    </div>
                    <div class="flex justify-between w-full">
                        <div>
                            <label class="block text-sm text-gray-500" for="city">City</label>
                            <input class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" type="text" id="city"
                                name="city" placeholder="city">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-500" for="code-postal">Code Postal</label>
                            <input class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" type="text"
                                id="code-postal" name="code-postal" placeholder="code postal">
                        </div>
                    </div>
                    <div>

                    </div>
                    <div>
                        <label class="block text-sm text-gray-500" for="phone">Phone Number</label>
                        <input class="w-full px-4 py-2 my-3 border-2 border-gray-800 rounded-2xl" type="text" id="phone"
                            name="phone" placeholder="phone">
                    </div>
                </div>
            </form>
        </article>
        <article class="py-8 ">
            <h3 class="my-4 text-2xl font-semibold text-gray-800">Order Summary</h3>
            <section class="p-4 space-y-4 shadow-md bg-blue-50 rounded-2xl">
                @foreach (Cart::content() as $item)
                    <article class="flex pb-4 border-b border-gray-400 ">
                        <img src="{{ asset('assets/men.jpg') }}" alt="" class="object-contain w-1/5 mr-3">
                        <div class="flex flex-col space-y-4">
                            <h3>{{ $item->name }}</h3>
                            <span class="block">{{ App\Models\Product::find($item->id)->category->name }}</span>

                            <span class="inline-block font-bold justify-self-end "><i class="fas fa-donate"></i>
                                ${{ $item->price }}</span>
                            <span class="block"><i class="fas fa-times"></i> <em
                                    class="text-red-400 ">{{ $item->qty }}</em></span>
                        </div>
                        <div class="ml-auto">
                            <i class="text-2xl text-red-400 cursor-pointer far fa-trash-alt hover:text-red-700"></i>
                        </div>
                    </article>
                @endforeach
                {{-- <hr class="bg-blue-100 border-gray-500 rounded-md shadow-md"> --}}

                {{-- <hr class="bg-blue-100 border-gray-500 rounded-md shadow-md"> --}}
                <article class="pb-4 space-y-4 border-b border-gray-400">
                    <div class="flex justify-between ">
                        <h3>SubTotal</h3>
                        <b>$64.6</b>
                    </div>

                    <div class="flex justify-between ">
                        <h3>Shipping</h3>
                        <b>$64.6</b>
                    </div>
                    <hr>
                    <div class="flex justify-between ">
                        <h3 class="font-bold">Total</h3>
                        <b>$64.6</b>
                    </div>
                </article>
                {{-- <hr class="bg-blue-100 border-gray-500 rounded-md shadow-md"> --}}
                <button class="block w-full p-4 font-bold text-center text-white bg-indigo-800 rounded-lg">Confirm
                    Order</button>

            </section>
        </article>
    </section>
@endsection
