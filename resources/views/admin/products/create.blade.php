@extends('layouts.admin');

@section('title', 'Abdo-Shop - Create Product')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="text-left mt-8 ml-8">
            <a href="{{ route('products.index') }}" class="p-4 border-2 bg-indigo-500 text-white rounded-md ">Back</a>
        </section>
        <div class="flex flex-col  px-4 py-8  dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10 w-full">
            <div class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white">
                Create a new Product
            </div>

            <div class="p-6 mt-8">
                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="text"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="name" placeholder="Product name" value="{{ old('name') }}" required />
                    </div>
                </div>

                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="number"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="price" placeholder="Price" value="{{ old('price') }}" step="0.1" required />
                    </div>
                </div>
                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="file"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="img" required />
                    </div>
                </div>

                <select
                    class="block w-full my-4 text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                    name="category_id" required>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">
                            {{ $cat->name }}
                        </option>
                    @endforeach


                </select>


                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <textarea
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="Product description" name="description"
                            required>{{ old('description') }}</textarea>
                    </div>
                </div>


                <div class="flex w-full my-4">
                    <button type="submit"
                        class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Create
                    </button>
                </div>

            </div>
        </div>
    </form>
@endsection
