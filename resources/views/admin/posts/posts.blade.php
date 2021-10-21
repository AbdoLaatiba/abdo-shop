@extends('layouts.admin');

@section('title', 'Abdo-Shop - Posts')

@section('content')
    <section class="text-right mt-8 mr-8">
        <a href="{{ route('posts.create') }}" class="p-4 border-2 bg-indigo-500 text-white rounded-md ">Create New Post</a>

    </section>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Id</th>
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3">Auther</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($posts as $post)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md font-semibold border">{{ $post->id }}</td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $post->title }}</td>
                                <td class="px-4 py-3 text-ms font-semibold border">
                                    {{ App\Models\User::find($post->user_id)->name }}
                                </td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $post->created_at }}</td>
                                <td class="px-4 py-3 text-sm border">
                                    <a href="{{ route('posts.edit', ['post' => $post]) }}"
                                        class="p-2 rounded-md bg-green-500 text-white">Edit</a>
                                    <form class="inline-block" action="{{ route('posts.destroy', ['post' => $post]) }}"
                                        method="POST">
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
