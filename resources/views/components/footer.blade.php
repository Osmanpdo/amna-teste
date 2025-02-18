<footer class="w-full flex justify-center bg-amna-primary">
    <div class="w-footer text-white">
        <div class="grid grid-cols-4 py-8">
            <div class="flex justify-start">
                <a href="{{ route('welcome') }}" class="p-1 "><img class="h-14" src="{{ asset('logos/amna-logo.png') }}" alt="logo da associação"></a>
            </div>
            <div class="flex flex-col">
                <h2 class="text-yellow-400 text-lx">Importante</h2>
                <a class="hover:text-blue-400" href="">Eventos</a>
                <a class="hover:text-blue-400" href="">Em breve</a>
            </div>
            <div class="flex flex-col">
                <h2 class="text-yellow-400 text-lx">Social</h2>
                <a class="hover:text-blue-400" href="">Facebook</a>
                <a class="hover:text-blue-400" href="">Twitter</a>
                <a class="hover:text-blue-400" href="">Instagram</a>
                <a class="hover:text-blue-400" href="">Linkedin</a>
                <a class="hover:text-blue-400" href="">Github</a>
            </div>
            <div>
                <h2 class="text-yellow-400 text-lx">Contato</h2>
                <p>teste@teste.com</p>
                <p>+11 11 1111-1111</p>
                <p>Rua teste</p>
                <p>Iguatu</p>
            </div>
        </div>
        <div class="grid grid-cols-t py-8">
            <div class="grid grid-cols-2">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, neque placeat qui quos odit dolores assumenda, magni harum deleniti ipsa, eos quam at rem adipisci labore dolorem libero temporibus maiores.</p>
                </div>
            </div>

            <div class="flex justify-start items-start">
                <a class="mx-2" href=""><img class="h-6 w-6" src="{{ asset('logos/facebook.png') }}" alt="logo facebook"></a>
                <a class="mx-2" href=""><img class="h-6 w-6" src="{{ asset('logos/twitter.png') }}" alt="logo twitter"></a>
                <a class="mx-2" href=""><img class="h-6 w-6" src="{{ asset('logos/instagram.png') }}" alt="logo instagram"></a>
                <a class="mx-2" href=""><img class="h-6 w-6" src="{{ asset('logos/linkedin.png') }}" alt="logo linkedin"></a>
                <a class="mx-2" href=""><img class="h-6 w-6" src="{{ asset('logos/github.svg') }}" alt="logo github"></a>
            </div>
        </div>
    </div>
</footer>