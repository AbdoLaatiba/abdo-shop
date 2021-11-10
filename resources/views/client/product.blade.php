@extends('layouts.index')

@section('content')
    <section class="overflow-hidden text-gray-600 body-font"
        x-data="{desc : true, rev : false, det : false, 
            descShow(){
                this.rev = false;
                this.det = false;
                this.desc = true
            },
            revShow(){
                this.rev = true;
                this.det = false; 
            this.desc = false
            },
            detShow(){
                this.rev = false;
                this.det = true; 
                this.desc = false
            }
        }">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap mx-auto lg:w-4/5">
                <div class="w-full mb-6 lg:w-1/2 lg:pr-10 lg:py-6 lg:mb-0">
                    <h2 class="text-sm tracking-widest text-gray-500 title-font">BRAND NAME</h2>
                    <h1 class="mb-4 text-3xl font-medium text-gray-900 title-font">{{ $product->name }}</h1>
                    <div class="flex mb-4">
                        <button
                            x-bind:class="desc ? 'flex-grow px-1 py-2 text-lg text-indigo-500 border-b-2 border-indigo-500' : 'flex-grow px-1 py-2 text-lg border-b-2 border-gray-300 ' "
                            x-on:click="descShow">Description</button>
                        <button
                            x-bind:class="rev ? 'flex-grow px-1 py-2 text-lg text-indigo-500 border-b-2 border-indigo-500' : 'flex-grow px-1 py-2 text-lg border-b-2 border-gray-300 ' "
                            x-on:click="revShow">Reviews</button>
                        <button
                            x-bind:class="det ? 'flex-grow px-1 py-2 text-lg text-indigo-500 border-b-2 border-indigo-500' : 'flex-grow px-1 py-2 text-lg border-b-2 border-gray-300 ' "
                            x-on:click="detShow">Details</button>
                    </div>
                    <article x-show="desc">
                        <p class="mb-4 leading-relaxed">{{ $product->description }}</p>
                        <div class="flex">
                            <span class="text-2xl font-medium text-gray-900 title-font">${{ $product->price }}</span>
                            <form class="ml-auto" action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="img" value="{{ $product->img }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit"
                                    class="flex px-6 py-2 text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Add
                                    To Cart</button>
                            </form>
                            <a
                                class="inline-flex items-center justify-center w-10 h-10 p-0 ml-4 text-gray-500 bg-gray-200 border-0 rounded-full">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <article x-show="rev">
                        <div class="px-4 py-4 space-y-4 bg-gray-200 rounded-md">
                            <h3>Abdelwahd Laatiba</h3>
                            <span class="space-x-2 ">
                                <img class="inline w-4" src="{{ asset('assets/star.svg') }}" alt="">
                                <img class="inline w-4" src="{{ asset('assets/star.svg') }}" alt="">
                                <img class="inline w-4" src="{{ asset('assets/star.svg') }}" alt="">
                                <img class="inline w-4" src="{{ asset('assets/star.svg') }}" alt="">
                            </span>
                            <p class="pl-4 border-l-4 border-gray-400">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, molestiae.
                            </p>
                        </div>
                    </article>
                    <article x-show="det">
                        This is Details
                    </article>
                </div>
                <img alt="ecommerce" class="object-cover object-center w-full h-64 rounded lg:w-1/2 lg:h-auto"
                    src='{{ asset('storage/' . $product->img) }}'>
            </div>
        </div>
    </section>
@endsection
