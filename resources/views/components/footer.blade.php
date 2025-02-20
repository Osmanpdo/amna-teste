<footer class="w-full flex justify-center bg-amna-primary-100">
    <div class="w-amna-app text-white">
        <div class="grid grid-cols-3 py-8">
            <div>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati tenetur incidunt possimus illum quia enim nemo magni animi officia quibusdam, debitis corporis numquam delectus recusandae, sapiente nam aliquid neque reprehenderit.</p>
            </div>
            <div class="flex justify-center items-start">
                <a class="text-7xl font-serif text-white px-7" href="{{ route('welcome') }}">
                    <img class="h-amna-logo" src="{{ asset('logo_white.png') }}" alt="Logo da associação">
                </a>
            </div>
            <div class="flex justify-end items-center">
                <a class="mx-2" href=""><img class="h-8 w-8" src="{{ asset('logos/facebook.png') }}" alt="logo facebook"></a>
                <a class="mx-2" href=""><img class="h-8 w-8" src="{{ asset('logos/twitter.png') }}" alt="logo twitter"></a>
                <a class="mx-2" href=""><img class="h-8 w-8" src="{{ asset('logos/instagram.png') }}" alt="logo instagram"></a>
                <a class="mx-2" href=""><img class="h-8 w-8" src="{{ asset('logos/linkedin.png') }}" alt="logo linkedin"></a>
                <a class="mx-2" href=""><img class="h-8 w-8" src="{{ asset('logos/github.svg') }}" alt="logo github"></a>
            </div>
        </div>
    </div>
</footer>