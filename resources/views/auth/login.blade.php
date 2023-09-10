<x-layouts.auth.app>

    <x:slot:title>Login</x:slot:title>

    <div class="relative flex flex-wrap">
        <div class="w-full relative">
            <div class="md:mt-6">
                <div class="text-center font-bold text-black">
                    <h1 style="font-size:40px">Login</h1>
                </div>
                <form action="{{ route('login') }}" method="post" class="mt-8">@csrf
                    <div class="mx-auto max-w-lg ">
                        <div class="py-1">
                            <span class="px-1 text-sm text-gray-600">Email</span>
                            <input name="email" value="{{ old('email') }}" type="email"
                                class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                        </div>
                        <div class="py-1">
                            <span class="px-1 text-sm text-gray-600">Password</span>
                            <input name="password" type="password" x-model="password"
                                class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                        </div>
                        <button type="submit" class="mt-5 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                           Login
                        </button>
                    </div>
                </form>

                <div class="text-sm font-semibold py-6 flex justify-center">
                    <a href="{{ route('register') }}"
                        class="text-black font-normal border-b-2 border-gray-200 hover:border-teal-500">You're not
                        already member?
                        <span class="text-black font-semibold">
                            Register
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    
</x-layouts.auth.app>
