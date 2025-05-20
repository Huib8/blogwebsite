<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Title</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Content</label>
                        <textarea name="content" rows="6" class="w-full border-gray-300 rounded-md shadow-sm" required>{{ $post->content }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium text-sm text-gray-700">Replace Image (optional)</label>
                        <input type="file" name="image" class="block w-full text-sm text-gray-500">
                    </div>

                    @if ($post->image_path)
                        <div class="mb-6">
                            <p class="text-sm text-gray-600 mb-1">Current Image:</p>
                            <img src="{{ asset('storage/' . $post->image_path) }}" class="max-w-xs rounded shadow" alt="Current Post Image">
                        </div>
                    @endif

                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
