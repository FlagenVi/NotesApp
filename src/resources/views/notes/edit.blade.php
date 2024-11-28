@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ isset($note) ? 'Edit Note' : 'Create Note' }}</h1>

    <form method="POST" action="{{ isset($note) ? route('notes.update', $note) : route('notes.store') }}" class="bg-white p-6 rounded shadow">
        @csrf
        @if(isset($note))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title', $note->title ?? '') }}"
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Enter the title"
            />
        </div>
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea
                name="content"
                id="content"
                rows="6"
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Write your note here..."
            >{{ old('content', $note->content ?? '') }}</textarea>
        </div>
        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition ease-in-out duration-150"
        >
            {{ isset($note) ? 'Update Note' : 'Save Note' }}
        </button>
    </form>
</div>
@endsection
