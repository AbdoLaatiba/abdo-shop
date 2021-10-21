@extends('layouts.admin');

@section('title', 'Abdo-Shop - Create user')

@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="flex flex-col  px-4 py-8  dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10 w-full">
            <div class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white">
                Create a new User
            </div>

            <div class="p-6 mt-8">
                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="text"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="name" value="{{ old('name') }}" placeholder="User name" required />
                    </div>
                </div>

                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="email"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="email" placeholder="User email" value="{{ old('email') }}" required />
                    </div>
                </div>
                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <label class="inline-flex items-center mt-3">
                            <input type="radio" name="role" value="1" class="form-radio h-5 w-5 text-gray-600" checked><span
                                class="ml-2 text-gray-700 mr-4">Admin</span>
                            <input type="radio" name="role" value="0" class="form-radio h-5 w-5 text-gray-600"><span
                                class="ml-2 text-gray-700">User</span>
                        </label>
                    </div>
                </div>


                <div class="flex flex-col mb-2">
                    <div class=" relative ">
                        <input type="password" id="pass"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="password" placeholder="User password" required />
                        <i id='show'
                            onclick="document.getElementById('pass').setAttribute('type', 'text'); this.style.display= 'none'; document.getElementById('hide').style.display = 'inline-block';"
                            class="fas fa-eye absolute right-4 bottom-3 cursor-pointer"></i>
                        <i id="hide"
                            onclick="document.getElementById('pass').setAttribute('type', 'password'); this.style.display= 'none'; document.getElementById('show').style.display = 'inline-block'"
                            class="fas fa-eye-slash hidden absolute right-4 bottom-3 cursor-pointer"></i>
                    </div>
                </div>


                <div class="flex w-full my-4">
                    <button type="submit"
                        class="py-2 px-4  bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 focus:ring-offset-purple-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Create
                    </button>
                </div>

            </div>
        </div>
    </form>
@endsection
