<nav class="container mx-auto flex justify-between relative pt-1">
    <a href="/" class="inline-block p-2 text-xl">Abdo-Shop</a>
    <ul id="nav-list" class="hidden absolute top-0 left-0 w-1/2 text-center bg-gray-600 h-screen sm:h-auto sm:relative sm:text-left sm:bg-transparent sm:flex justify-center">
        <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700 "><a href="/"> Home</a></li>
        <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700 "><a href="/shop"> Shop</a></li>
        <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700 "><a href=""> Categories</a></li>
        <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700 "><a href=""> Blog</a></li>
        @auth
            <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700  sm:hidden ">
                <form class="inline-block" action="{{ route('logout') }}" method="POST">
                     @csrf 
                     <button type="submit" class="md:inline-block p-2600 text-xl">Logout</button>
                    </form>
            </li>
        @endauth
        @guest
            
        <li class="block text-xl text-white border-b-2 sm:border-none border-gray-500 p-3 sm:text-gray-700  sm:hidden "><a href=""> Login</a></li>
        @endguest
    </ul>
    @auth
    <div>

        <a href="{{ route('admin') }}" class="invisible md:inline-block p-2 sm:visible text-blue-600 text-xl font-bold">{{ auth()->user()->name }}</a>
        <form class="inline-block" action="{{ route('logout') }}" method="POST"> @csrf <button type="submit" class="invisible md:inline-block p-2 sm:visible text-blue-600 text-xl font-bold">Logout</button></form>
    </div>
    @endauth
    @guest
        
    <a href="{{ route('login') }}" class="invisible md:inline-block p-2 sm:visible text-blue-600 text-xl font-bold">Login</a>
    @endguest
    
    <i id="menu" onclick="document.getElementById('nav-list').classList.toggle('hidden');document.getElementById('menu').classList.toggle('fa-times');" class="fas fa-bars inline-block text-3xl text-gray-900 absolute top-3 right-4 sm:hidden cursor-pointer"></i>
</nav> 