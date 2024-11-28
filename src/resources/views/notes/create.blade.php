<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold">Create Note</h1>
        <form method="POST" action="{{ route('notes.store') }}" class="bg-white p-6 rounded shadow">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter the title"
                />
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea
                    name="content"
                    id="content"
                    rows="6"
                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your note here..."
                ></textarea>
            </div>
            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition ease-in-out duration-150"
            >
                Save Note
            </button>
        </form>
    </div>
</x-app-layout>
