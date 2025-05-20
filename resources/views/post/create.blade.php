<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label for="title" class="block font-medium text-sm text-gray-700 mb-1">Title</label>
                        <input id="title" type="text" name="title" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500" required>
                    </div>

                    <div class="mb-6">
                        <label for="content" class="block font-medium text-sm text-gray-700 mb-1">Content</label>
                        <textarea id="content" name="content" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-500" required></textarea>
                    </div>

                    <div class="mb-6">
                        <label for="image" class="block font-medium text-sm text-gray-700 mb-1">Upload Image</label>
                        <input id="image" type="file" name="image" class="block w-full text-sm text-gray-500">
                    </div>

                    <div class="flex justify-start">
                        <button type="submit" class="bg-blue text-black px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 border border-gray-300">
                            Publish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
