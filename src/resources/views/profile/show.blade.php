<x-app-layout>
    <div class="max-w-4xl mx-auto py-8">
        <h1 class="text-3xl font-bold">Profile</h1>
        <div class="bg-white p-6 rounded shadow mt-6">
            <p class="text-gray-800"><strong>Name:</strong> {{ $user->name }}</p>
            <p class="text-gray-800"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="text-gray-800"><strong>Created At:</strong> {{ $user->created_at->format('d M Y') }}</p>
        </div>
    </div>
</x-app-layout>

