<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Edit Home Page</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('overmij.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" name="title" value="{{ $content->title }}" class="w-full border-gray-300 rounded shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Content</label>
                        <textarea name="content" rows="5" class="w-full border-gray-300 rounded shadow-sm" required>{{ $content->content }}</textarea>
                    </div>

                    <button type="submit" class="bg-blue text-black px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 border border-gray-300">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
