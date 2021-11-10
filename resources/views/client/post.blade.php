@extends('layouts.index')

@section('content')
    <section class="container mx-auto sm:px-44 py-11">

        <div class="px-6">
            <img class="object-cover object-center w-full sm:float-left sm:w-1/2 sm:mr-8"
                src='{{ asset('storage/' . $post->img) }}' alt="">
            <h1 class="my-8 text-4xl font-bold text-black">{{ $post->title }}</h1>
            <span class="inline-block my-4 text-sm text-indigo-600">Author :
                {{ App\Models\User::find($post->user_id)->name }}</span>
            <p>
                {{ $post->body }}
            </p>
        </div>
        <div class="clear-both"></div>
    </section>
    <section class="sm:px-44">
        <article>
            @guest
                <div class="p-4 bg-gray-300 roundex-md ">
                    To leave a comment you should <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                    <div>
                    @endguest
                    @auth
                        <!-- comment form -->
                        <div class="flex items-center justify-center w-full mx-auto mt-24 mb-4 ">
                            <form class="w-full px-4 pt-2 bg-gray-200 rounded-lg" action="{{ route('new-comment') }}"
                                method="POST">
                                @csrf
                                <div class="flex flex-wrap mb-6 -mx-3">
                                    <h2 class="px-4 pt-3 pb-2 text-lg text-gray-800">Add a new comment</h2>
                                    <div class="w-full px-3 mt-2 mb-2 md:w-full">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <textarea
                                            class="w-full h-20 px-3 py-2 font-medium leading-normal placeholder-gray-700 bg-gray-100 border border-gray-400 rounded focus:outline-none focus:bg-white"
                                            name="comment" placeholder='Type Your Comment' required></textarea>
                                    </div>
                                    <div class="flex items-start w-full px-3 md:w-full">

                                        <div class="ml-auto -mr-1">
                                            <input type='submit'
                                                class="px-4 py-1 mr-1 font-medium tracking-wide text-gray-700 bg-white border border-gray-400 rounded-lg hover:bg-gray-100"
                                                value='Post Comment'>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                @endauth
        </article>
        <article class="mb-8 space-y-4">
            <h1 class="py-8 text-3xl text-center text-black">Comments</h1>
            @foreach ($comments as $comment)
                <div class="p-4 space-y-4 border-2 border-gray-300 rounded-lg">
                    <h3 class="text-2xl text-gray-800">{{ App\Models\User::find($comment->user_id)->name }}</h3>
                    <span class="text-sm text-gray-500">{{ $comment->created_at }}</span>
                    <p>
                        {{ $comment->text }}
                    </p>
                </div>
            @endforeach


        </article>
    </section>
@endsection
