<x-public-layout>
    <div class="py-12 text-center lg:my-12 lg:text-left">
        <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="mt-12 lg:mt-0">
                    <h1 class="mb-4 text-4xl font-bold tracking-tight md:text-5xl xl:text-6xl">
                        Личный коуч <br /><span class="text-primary">Екатерина Старцева</span>
                    </h1>
                    <p class="mb-6 text-xl">Улучшите свою жизнь благодаря услугам коучинга, выберите пакет, соответствующий вам, и начните преображение уже сегодня!</p>
                    <a class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-1xl px-5 py-2.5 text-center me-2 mb-2" href="#" role="button">
                        Записаться
                    </a>
                </div>
                <div class="mb-12 lg:mb-0">
                    <img class="w-full rounded-lg shadow-lg dark:shadow-black/20"
                         src="{{ asset('/assets/images/hero-photo.jpg') }}"
                         alt=""
                    />
                </div>
            </div>
        </div>
    </div>

    <div style="height: 500px;"></div>
</x-public-layout>
