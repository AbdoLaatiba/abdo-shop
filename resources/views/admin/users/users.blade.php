@extends('layouts.admin');

@section('title', 'Abdo-Shop - Posts')

@section('content')
    <section class="text-right mt-8 mr-8">
        <a href="{{ route('users.create') }}" class="p-4 border-2 bg-indigo-500 text-white rounded-md ">Create New User</a>

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
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Role</th>
                            <th class="px-4 py-3">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md font-semibold border">{{ $user->id }}</td>
                                <td class="px-4 py-3 text-md font-semibold border">{{ $user->name }}</td>
                                <td class="px-4 py-3 text-ms font-semibold border">
                                    {{ $user->email }}
                                </td>
                                <td class="px-4 py-3 text-md font-semibold border">
                                    @if ($user->is_admin)
                                        <span class="p-2 bg-green-300 rounded-md text-white text-sm">Admin</span>
                                    @else
                                        <span class="p-2 bg-pink-300 rounded-md text-white text-sm">User</span>
                                    @endif
                                <td class="px-4 py-3 text-sm border">
                                    <a href="{{ route('users.edit', ['user' => $user]) }}"
                                        class="p-2 rounded-md bg-green-500 text-white">Edit</a>
                                    <form class="inline-block" action="{{ route('users.destroy', ['user' => $user]) }}"
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
