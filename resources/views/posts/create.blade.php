<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required class="w-full border border-gray-300 rounded p-2" />
            </div>

            <div class="mt-4">
                <label for="body">Post</label>
                <textarea name="body" id="body" required class="w-full border border-gray-300 rounded p-2"></textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Create Post
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
