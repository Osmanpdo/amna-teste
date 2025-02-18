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
        <div class="py-4 w-app rounded-md shadow-lg transition-all duration-200">
            <div class="h-full w-full">
                <div class=" w-full px-5 pt-4 flex justify-start">
                    <a href="{{ route('welcome') }}" class=""><img class="h-14" src="{{ asset('logos/amna-logo.png') }}" alt="logo da associação"></a>
                </div>
                <div class="w-full h-8 px-7 my-10 flex justify-start items-start">
                    <p>Acesse sua conta</p>
                </div>
                <div class="px-7 w-full">
                    <form class="flex justify-start items-start flex-col" action="" method="post">
                        <div class="w-full py-2">
                            <label for="name">Nome</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded" type="text" placeholder="Seu nome" required>
                        </div>
                        <div class="w-full py-2">
                            <label for="email">E-mail</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded" placeholder="Seu e-mail" type="text" required>
                        </div>
                        <div class="w-full py-2">
                            <label for="password">Senha</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded " placeholder="Sua senha" type="password" required>
                        </div>
                        <div class="w-full py-2">
                            <label for="password">Confirmar Senha</label>
                            <input class="bg-white py-2 px-4 w-full border border-black rounded " placeholder="Sua senha novamente" type="password" required>
                        </div>
                        <div class="w-full flex justify-start flex-col">
                            <input class="bg-blue-700 hover:bg-blue-600 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300" type="submit" value="Cadastrar">
                        </div>
                        <span class=" border border-gray-500 w-full mt-8"></span>
                        <div class="bg-white w-full my-4 p-2">
                            <p>Já possui uma conta?</p>
                            <a class="text-blue-400 hover:text-blue-300 underline transition" href="{{ route('login') }}">Acesse agora mesmo</a>
                        </div>
                    </form> 
            </div>
        </div>
    </main>
</body>
</html>

