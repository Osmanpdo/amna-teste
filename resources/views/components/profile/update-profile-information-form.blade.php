<div class="bg-slate-900 flex flex-col my-2 p-4 rounded-md shadow-lg transition-all duration-200 hover:bg-slate-800">
    <header>
        <h2 class="text-lg font-bold text-slate-100">Informações do Perfil</h2> 
        <p class="pt-1">Atualize as Informações do nome da sua conta e do seu e-mail.</p>
    </header>

    <div class="text-white w-full">
        <form class="flex justify-start items-start flex-col" action="" method="post">
            <div class="w-full py-2">
                <label for="Nome">Nome</label>
                <input class="bg-gray-950 py-2 px-4 w-full border rounded text-white" placeholder="Seu nome" type="text" required>
            </div>
            <div class="w-full py-2">
                <label for="email">E-mail</label>
                <input class="bg-gray-950 py-2 px-4 w-full border rounded text-white" placeholder="Seu e-mail" type="email" required>
            </div>
            <div class="flex justify-start flex-col">
                <input class="bg-blue-700 hover:bg-blue-600 text-white text-center font-semibold py-1 px-3 my-4 border rounded transition duration-300" type="submit" value="Salvar">
            </div>
        </form> 
    </div>
</div>