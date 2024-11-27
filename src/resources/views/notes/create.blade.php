@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Note</h1>

    <form method="POST" action="{{ route('notes.store') }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full mt-2 border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Content</label>
            <textarea name="content" id="content" class="w-full mt-2 border-gray-300 rounded"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
