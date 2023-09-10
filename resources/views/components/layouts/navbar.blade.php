<!-- component -->
<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        
        <a href="/" class="{{ Request::is('/') ? 'border-b-2 border-blue-500' : '' }} text-gray-800 dark:text-gray-200 mx-1.5 sm:mx-6">Home</a>
        
        <a href="{{ route('articles') }}" class="{{ Request::is('articles') ? 'border-b-2 border-blue-500' : '' }} text-gray-800 dark:text-gray-200 mx-1.5 sm:mx-6">Articles</a>
        
        <a href="{{ route('login') }}" class="text-gray-800 dark:text-gray-200 mx-1.5 sm:mx-6">Sign In</a>
        
        <a href="{{ route('register') }}" class="text-gray-800 dark:text-gray-200 mx-1.5 sm:mx-6">Sign Up</a>
        
        @auth
        <form action="{{ route('logout') }}" method="POST">@csrf
            <button type="submit" class="text-gray-800 dark:text-gray-200 mx-1.5 sm:mx-6">Logout</button>
        </form>
        @endauth

    </div>
</nav>