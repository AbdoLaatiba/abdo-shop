@extends('layouts.admin');

@section('title', 'Abdo-Shop - Products')

@section('content')
    <section class="text-right mt-8 mr-8">
        <a href="{{ route('products.create') }}" class="p-4 border-2 bg-indigo-500 text-white rounded-md ">Create New
            Product</a>

    </section>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Id</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Date </th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($products as $product)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md font-semibold border">{{ $product->id }}</td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $product->name }}</td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $product->price }}</td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $product->created_at }}</td>
                                <td class="px-4 py-3 text-sm border">
                                    <a href="{{ route('products.edit', ['product' => $product]) }}"
                                        class="p-2 rounded-md bg-green-500 text-white">Edit</a>
                                    <form class="inline-block"
                                        action="{{ route('products.destroy', ['product' => $product]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="p-2 rounded-md bg-red-600 text-white">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
