@extends('layouts.index')

@section('content')
    <section class="container mx-auto sm:px-44 py-11">

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
    </section>
@endsection
