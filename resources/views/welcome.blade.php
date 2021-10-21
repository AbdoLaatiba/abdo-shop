<x-app-layout>
    <x-header />


    <main class="container mx-auto mt-8">
        <x-heading title="Discover Our Categories" />
        {{-- Catgeries --}}
        <section class="grid grid-cols-1 px-4 sm:px-0 sm:grid-cols-3 gap-4 ">
            <x-category img="{{ asset('assets/men.jpg') }}" category="Men" />
            <x-category img="{{ asset('assets/men.jpg') }}" category="Men" />
            <x-category img="{{ asset('assets/men.jpg') }}" category="Men" />
            <x-category img="{{ asset('assets/men.jpg') }}" category="Men" />

        </section>

        <x-heading title="Trending Products" />
        {{-- <section class="grid grid-cols-1 px-4 sm:px-0 sm:grid-cols-4 items-center "> --}}
        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
                @empty($products)
                    No Products
                @endempty
            @endforeach
        </div>
        {{-- </section> --}}

        <x-heading title="Our Latest Posts" />
        <section class="grid grid-cols-1 px-4 sm:px-0 sm:grid-cols-3 gap-4 mb-8">
            @foreach ($posts as $post)
                <article class="shadow-lg w-full bg-white">
                    <img src='{{ asset('storage/' . $post->img) }}' alt="" class="w-full h-72">
                    <h2 class="text-3xl font-bold my-4 px-4">{{ $post->title }}</h2>
                    <p class="px-4">
                        {{ $post->body }}
                    </p>
                    <a href="" class="text-blue-700 font-bold inline-block px-4 my-4">Read More</a>
                </article>
                @empty($posts)
                    <p>There is no posts yet</p>
                @endempty
            @endforeach
        </section>
        {{-- <section class="grid grid-cols-1 px-4 sm:px-0 sm:grid-cols-3 gap-4 mb-8">
            <article class="shadow-lg border-gray-300 border-2">
                <img src="{{ asset('assets/watch.jpg') }}" alt="" class="w-full h-72">
                <h2 class="text-3xl font-bold my-4 px-4">The best selling watches in 2021</h2>
                <p class="px-4">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <a href="" class="text-blue-700 font-bold inline-block px-4 my-4">Read More</a>
            </article>

            <article class="shadow-lg border-gray-300 border-2">
                <img src="{{ asset('assets/watch.jpg') }}" alt="" class="w-full h-72">
                <h2 class="text-3xl font-bold my-4 px-4">The best selling watches in 2021</h2>
                <p class="px-4">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <a href="" class="text-blue-700 font-bold inline-block px-4 my-4">Read More</a>
            </article>

            <article class="shadow-lg border-gray-300 border-2">
                <img src="{{ asset('assets/watch.jpg') }}" alt="" class="w-full h-72">
                <h2 class="text-3xl font-bold my-4 px-4">The best selling watches in 2021</h2>
                <p class="px-4">
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <a href="" class="text-blue-700 font-bold inline-block px-4 my-4">Read More</a>
            </article>
        </section> --}}

    </main>

    <footer class="bg-gray-800 text-white p-8">
        <section class="container mx-auto grid grid-cols-1 sm:grid-cols-4 gap-4 text-center">
            <article>
                <h3 class="text-indigo-400 text-2xl font-bold my-4">Abdo-Shop</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, ut.
                </p>
                <hr class="text-white my-4 border-dashed">
                <span>
                    N32 Adrar resident Dakhla Agadir Morocco
                </span>
            </article>

            <article>
                <h3 class="text-indigo-400 text-2xl font-bold my-4">Useful links</h3>
                <u class="list-none">
                    <li class="my-4 text-white"><a href="">Privacy</a></li>
                    <li class="my-4 text-white"><a href="">Conditions of service</a></li>
                    <li class="my-4 text-white"><a href="">Shipping & Delivery</a></li>
                    <li class="my-4 text-white"><a href="">Our Story</a></li>
                </u>
            </article>
            <article>
                <h3 class="text-indigo-400 text-2xl font-bold my-4">Social</h3>
                <ul>
                    <li class="my-4 text-white"><a href="">facebook</a></li>
                    <li class="my-4 text-white"><a href="">instagram</a></li>
                    <li class="my-4 text-white"><a href="">linkden</a></li>
                    <li class="my-4 text-white"><a href="">twitter</a></li>
                </ul>
            </article>
            <article>
                <h3 class="text-indigo-400 text-2xl font-bold my-4">Say hello</h3>
                <ul>
                    <li class="my-4 text-white"><a href="">abdo-shop@support.ma</a></li>
                    <li class="my-4 text-white"><a href="">06-12-34-43-21</a></li>
                </ul>
            </article>
        </section>
        <section class=" mt-8 text-center">
            <p>&copy; Copy Right All Right Reserved For Abdo-Shop</p>
            <span>Made With Love By <a href="" class="text-blue-400 font-bold">Abdelwahd Laatiba</a></span>
        </section>
    </footer>


</x-app-layout>
