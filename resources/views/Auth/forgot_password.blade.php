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

<body class="w-full h-full flex justify-center items-center flex-col">
    <main class="lg:w-amna-app md:w-amna-app-md lg:h-screen text-black flex justify-start items-center flex-col lg:justify-center">
        <div class="py-4 mt-4 w-full md:w-[25rem] lg:shadow-2xl md:shadow-2xl rounded-md transition-all duration-200 lg:mt-0">
            <div class="h-full w-full flex flex-col">
                <div class="w-full flex flex-col">
                    <a class="text-7xl font-serif w-full flex justify-start items-center bg-white text-black px-7" href="{{ route('welcome') }}">
                        <img class="h-20" src="{{ asset('logo.png') }}" alt="Logo da associação">
                        AMNA
                    </a>
                </div>
                <div class="px-7 w-full">
                    <form class="flex justify-start items-start flex-col" action="" method="post">
                        <div class="py-4">
                            <p>Esqueceu a senha? Sem problemas. Basta nos informar seu enderaço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.</p>
                        </div>
                        <div class="w-full py-2">
                            <label for="email">E-mail:</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded " placeholder="Seu e-mail" type="email" required>
                        </div>
                        <div class="w-full flex justify-start flex-col">
                            <input class="bg-amna-terciary-600 hover:bg-amna-terciary-500 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300" type="submit" value="REDEFINIR SENHA DE E-MAIL">
                        </div>
                    </form> 
            </div>
        </div>
    </main>
</body>
</html>