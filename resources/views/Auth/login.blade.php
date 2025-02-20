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
    <main class="w-main h-screen text-black flex justify-center items-center flex-col">
        <div class="py-4 w-[400px] shadow-2xl rounded-md transition-all duration-200">
            <div class="h-full w-full">
                <div>
                    <a class="text-7xl font-serif w-full flex justify-start items-center bg-white text-black px-7" href="{{ route('welcome') }}">
                        <img class="h-20" src="{{ asset('logo.png') }}" alt="Logo da associação">
                        AMNA
                    </a>
                </div>
                <div class="w-full h-8 px-7 my-6 text-lg flex justify-start items-start">
                    <p>Acesse sua conta</p>
                </div>
                <div class="px-7 w-full">
                    <form class="flex justify-start items-start flex-col" action="" method="post">
                        <div class="w-full py-2">
                            <label for="email">E-mail:</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded " placeholder="Seu e-mail" type="text" required>
                        </div>
                        <div class="w-full py-2">
                            <label for="password">Senha:</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded " placeholder="Sua senha" type="password" required>
                        </div>

                        <div class="w-full flex justify-start flex-col">
                            <a class="text-blue-400 hover:text-blue-300 underline transition" href="{{ route('forgot-password') }}">Esqueceu a senha?</a>
                            <input class="bg-amna-terciary-600 hover:bg-amna-terciary-500 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300" type="submit" value="Entrar">
                        </div>
                        <span class=" border border-gray-500 w-full mt-8"></span>
                        <div class="bg-white w-full my-4 p-2">
                            <p>Ainda não tem uma conta?</p>
                            <a class="text-blue-400 hover:text-blue-300 underline transition" href="{{ route('register') }}">Se inscreva gratuitamente</a>
                        </div>
                    </form> 
            </div>
        </div>
    </main>
</body>
</html>