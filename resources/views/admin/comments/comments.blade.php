@extends('layouts.admin');

@section('title', 'Abdo-Shop - Comments')

@section('content')
    {{-- <section class="mt-8 mr-8 text-right">
        <a href="{{ route('comments.create') }}" class="p-4 text-white bg-indigo-500 border-2 rounded-md ">Create New Post</a>

    </section> --}}
    <section class="container p-6 mx-auto font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="font-semibold tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 text-md">
                            <th class="px-4 py-3">Id</th>
                            <th class="px-4 py-3">Auther</th>
                            <th class="px-4 py-3">Text</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($comments as $comment)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 font-semibold border text-md">{{ $comment->id }}</td>
                                <td class="px-4 py-3 font-semibold border text-ms">
                                    {{ App\Models\User::find($comment->user_id)->name }}
                                </td>
                                <td class="px-4 py-3 font-semibold border text-md">{{ $comment->text }}</td>
                                <td class="px-4 py-3 font-semibold border text-md">
                                    @if ($comment->approved)
                                        <span class='p-2 text-sm text-white bg-green-300 rounded-md'>Approved</span>
                                    @else
                                        <span class='p-2 text-sm text-white bg-red-300 rounded-md'>pending</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm border">
                                    <form action="{{ route('comments.update', ['comment' => $comment]) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button href="" class="p-2 text-white bg-green-500 rounded-md">Approve</button>
                                    </form>
                                    <form class="inline-block"
                                        action="{{ route('comments.destroy', ['comment' => $comment]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="p-2 text-white bg-red-600 rounded-md">Delete</button>
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
