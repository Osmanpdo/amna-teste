<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    @if (true)
    <x--header-dashboard user="osman" />
    <main class="bg-slate-950 h-screen w-full text-white ps-6 ">
        <h1 class="text-xl py-6">Dashboard</h1>
        <div class="bg-slate-900 flex flex-col my-2 me-6 p-4 rounded-md shadow-lg transition-all duration-200 hover:bg-slate-800">
            <div class="mt-2 text-slate-400">
                <p>Você está logado!</p>
            </div>
        </div>
    </main>
    @else

    @endif
</body>
</html>
