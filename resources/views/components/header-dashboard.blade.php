<header>
    <nav class="bg-black text-white flex justify-between p-6 border-b border-gray-300">
        <div>
            <a href="{{ route('welcome') }}">Logo</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>  
        <div class="flex gap-6">
            <a href="{{ route('profile') }}">{{ $user }}</a>
        </div>
    </nav>
</header>
