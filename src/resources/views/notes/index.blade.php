@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Your Notes</h1>
    <a href="{{ route('notes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Note</a>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($notes as $note)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-lg font-bold">{{ $note->title }}</h2>
                <p class="text-gray-600">{{ Str::limit($note->content, 100) }}</p>
                <div class="mt-4">
                    <a href="{{ route('notes.edit', $note) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
