@extends('layouts.index')

@section('content')
    <div class="container relative mx-auto carousel" style="max-width:1600px;">
        <div class="relative w-full overflow-hidden carousel-inner">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                <div class="flex w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-3"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-1 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-2"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute bg-right bg-cover opacity-0 carousel-item" style="height:50vh;">
                <div class="flex w-full h-full pt-6 mx-auto bg-right bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Real Bamboo Wall Clock</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-2 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-3"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="absolute opacity-0 carousel-item" style="height:50vh;">
                <div class="flex w-full h-full pt-6 mx-auto bg-bottom bg-cover md:pt-0 md:items-center"
                    style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                    <div class="container mx-auto">
                        <div class="flex flex-col items-center w-full px-6 tracking-wide lg:w-1/2 md:ml-16 md:items-start">
                            <p class="my-4 text-2xl text-black">Brown and blue hardbound book</p>
                            <a class="inline-block text-xl leading-relaxed no-underline border-b border-gray-600 hover:text-black hover:border-black"
                                href="#">view product</a>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2"
                class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer prev control-3 md:ml-10 hover:text-white hover:bg-gray-900">‹</label>
            <label for="carousel-1"
                class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 text-3xl font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-gray-900">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="block text-4xl text-gray-400 cursor-pointer carousel-bullet hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    <section class="py-8 bg-white">

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline "
                        href="#">
                        Store
                    </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="inline-block p-2 text-indigo-700 border-2 border-indigo-700 rounded-xl"
                            href="{{ route('store') }}">
                            Show all

                        </a>



                    </div>
                </div>
            </nav>




        </div>
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">

                    @foreach ($products as $product)
                        <div class="w-full p-4 lg:w-1/4 md:w-1/2 hover:grow">
                            <a class="relative block h-48 overflow-hidden rounded"
                                href="{{ route('product', ['id' => $product->id]) }}">
                                <img alt="ecommerce" class="block object-cover object-center w-full h-full"
                                    src='{{ asset('storage/' . $product->img) }}'>
                            </a>
                            <div class="mt-4">
                                <h3 class="mb-1 text-xs tracking-widest text-gray-500 title-font">
                                    {{ $product->category->name }}</h3>
                                <h2 class="text-lg font-medium text-gray-900 title-font">{{ $product->name }}</h2>
                                <p class="mt-1">${{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
        </section>


        {{-- Blog --}}

        <div class="container flex flex-wrap items-center pt-4 pb-12 mx-auto">

            <nav id="store" class="top-0 z-30 w-full px-6 py-1">
                <div class="container flex flex-wrap items-center justify-between w-full px-2 py-3 mx-auto mt-0">

                    <a class="text-xl font-bold tracking-wide text-gray-800 no-underline uppercase hover:no-underline "
                        href="#">
                        Blog
                    </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="inline-block p-2 text-indigo-700 border-2 border-indigo-700 rounded-xl"
                            href="{{ route('blog') }}">
                            Show all

                        </a>

                    </div>
                </div>
            </nav>

            @foreach ($posts as $post)
                <div class="flex flex-col w-full p-6 md:w-1/3 xl:w-1/4">
                    <a href="{{ route('show-post', ['id' => $post->id]) }}">
                        <img class="hover:grow hover:shadow-lg" src='{{ asset('storage/' . $post->img) }}'>
                        <div class="flex items-center justify-between pt-3">
                            <p class="">{{ $post->title }}</p>
                        </div>

                    </a>
                </div>
            @endforeach


        </div>

    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="mb-12 text-3xl font-medium text-center text-gray-900 title-font">Testimonials</h1>
            <div class="flex flex-wrap -m-4">
                <div class="w-full p-4 md:w-1/2">
                    <div class="h-full p-8 bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/106x106"
                                class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                            <span class="flex flex-col flex-grow pl-4">
                                <span class="font-medium text-gray-900 title-font">Holden Caulfield</span>
                                <span class="text-sm text-gray-500">UI DEVELOPER</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="w-full p-4 md:w-1/2">
                    <div class="h-full p-8 bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/106x106"
                                class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                            <span class="flex flex-col flex-grow pl-4">
                                <span class="font-medium text-gray-900 title-font">Holden Caulfield</span>
                                <span class="text-sm text-gray-500">UI DEVELOPER</span>
                            </span>
                        </a>
                    </div>
                </div>



                <div class="w-full p-4 md:w-1/2">
                    <div class="h-full p-8 bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/107x107"
                                class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                            <span class="flex flex-col flex-grow pl-4">
                                <span class="font-medium text-gray-900 title-font">Alper Kamu</span>
                                <span class="text-sm text-gray-500">DESIGNER</span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="w-full p-4 md:w-1/2">
                    <div class="h-full p-8 bg-gray-100 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400"
                            viewBox="0 0 975.036 975.036">
                            <path
                                d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                            </path>
                        </svg>
                        <p class="mb-6 leading-relaxed">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry
                            neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo,
                            post-ironic heirloom try-hard pabst authentic iceland.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="https://dummyimage.com/107x107"
                                class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
                            <span class="flex flex-col flex-grow pl-4">
                                <span class="font-medium text-gray-900 title-font">Alper Kamu</span>
                                <span class="text-sm text-gray-500">DESIGNER</span>
                            </span>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>



@endsection
