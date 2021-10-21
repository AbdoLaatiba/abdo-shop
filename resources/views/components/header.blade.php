<header class="container mx-auto h-auto pb-24 text-gray-500">
    {{-- <x-nav/> --}}
    <section class=" grid grid-cols-1 px-4 md:grid-cols-2 items-center h-full gap-8 text-center md:text-left pt-24">
        <article class="">
            <h1 class="text-3xl my-5 font-bold text-black">Buy Best Poducts With The Best Prices!!</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vitae corporis recusandae quod provident quisquam ratione iste optio accusamus nisi libero voluptatum, minus sequi voluptates? Omnis unde ducimus ad nesciunt, suscipit asperiores vel error consequuntur vero, sequi libero quisquam alias quod iure perferendis! Aspernatur !
            </p>
            <article class="pt-5">
                <a href="" class="px-8 py-3 rounded-3xl bg-gray-700 text-yellow-500 inline-block font-bold mr-3">Products</a>
            <a href="{{ route('register') }}" class="px-8 py-3 rounded-3xl bg-transparent text-black border-2 border-black inline-block font-bold">Signup</a>
            </article>
        </article>
        <article class="hidden md:block">
            <img src="{{ asset('assets/Ecommerce.png') }}" alt="" width="450"  class="mx-auto">
        </article>
    </section>
</header>