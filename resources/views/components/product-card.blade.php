{{-- <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <div class="group relative">
                <div
                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src='{{ asset('storage/' . $product->img) }}' alt="Front of men&#039;s Basic Tee in black."
                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->name }}
                            </a>
                        </h3>
                    </div>
                    <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                </div>
            </div>

            <!-- More products... -->
        </div>
    </div>
</div> --}}

<a href="#" class="group bg-white pb-4">
    <div class="w-full aspect-w-1 aspect-h-1  overflow-hidden xl:aspect-w-7 xl:aspect-h-8 shadow-md">
        <img src='{{ asset('storage/' . $product->img) }}'
            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
            class="w-full h-full object-center object-cover group-hover:opacity-75">
    </div>
    <h3 class="mt-4 text-sm text-gray-700 pl-4">
        {{ $product->name }}
    </h3>
    <p class="mt-1 text-lg font-medium text-gray-900 pl-4">
        ${{ $product->price }}
    </p>
</a>
