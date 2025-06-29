<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        @auth
            <a href="{{ route('posts.create') }}" class="bg-green-500 text-black px-8 py-4 rounded">Create New Post</a>
        @endauth

        <ul class="mt-4">
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
