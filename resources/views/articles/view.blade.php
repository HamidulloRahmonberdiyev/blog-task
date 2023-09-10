<x-layouts.app>

    <x-slot:title>Articles/{{ $article->title }}</x-slot:title>

    <div class="md:px-4 md:grid md:grid-cols-2 lg:grid-cols-1 gap-5 space-y-4 md:space-y-0">

        <div
            class="max-w-lg bg-white px-4 pt-4 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-600">
            <a href="">
                <div class="relative">
                    <img class="w-full rounded-xl" src="{{ asset('storage/' . $article->photo) }}"
                        alt="Colors" />
                    <p
                        class="absolute top-0 flex bg-yellow-300 text-gray-800 font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                            <path fill-rule="evenodd"
                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                clip-rule="evenodd" />
                        </svg> <span style="margin-top:-5px;margin-left:7px">{{ $article->show_count }}</span>
                    </p>
                </div>
                <p class="mb-1 mt-2 text-sm text-gray-800">{{ $article->user->name }} • <time>{{
                        $article->created_at->format('d-m-Y') }}</time></p>
                </p>
                <h1 class="mt-4 text-gray-800 text-2xl font-bold cursor-pointer">{{ $article->title }}
                </h1>
                <div class="my-4">
                    <div class="flex space-x-1 items-center">
                        <p class="leading-relaxed mb-3">{{ $article->body }}</p>
                    </div>
                </div>
            </a>

        </div>

        <div
            class="max-w-lg bg-white px-4 pt-4 pb-2 rounded-xl shadow-lg transform hover:scale-105 transition duration-600">
            <h1 class="text-3xl text-gray-800 text-center font-bold mb-6">
                Tags
            </h1>

            <div class="w-full text-center mx-auto">
                @foreach ($article->tags as $tag)
                <button type="button"   
                    class="border border-gray-500 bg-gray-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    {{ $tag->name }}
                </button>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>