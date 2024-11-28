<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <a href="{{ route('dashboard') }}" class="text-gray-800 text-lg font-bold">NotesApp</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('profile.show') }}" class="text-gray-600 hover:text-gray-800">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-800">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
