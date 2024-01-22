<x-public-layout>
    <div class="py-12 text-center lg:my-12 lg:text-left">
        <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="mt-12 lg:mt-0">
                    <h1 class="mb-4 text-4xl font-bold tracking-tight md:text-5xl xl:text-6xl">
                        Life-коуч <br /><span>Екатерина Старцева</span>
                    </h1>
                    <p class="mb-6 text-xl">
                        Улучшите свою жизнь благодаря услугам коучинга, выберите услугу, подходящую под ваш запрос, и начните преображение уже сегодня!
                    </p>
                    <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-1xl px-5 py-2.5 text-center me-2 mb-2"
                       x-data=""
                       x-on:click.prevent="$dispatch('open-modal', 'callback-form')"
                    >
                    Записаться
                    </button>
                </div>
                <div class="mb-12 lg:mb-0">
                    <img class="w-full rounded-lg shadow-lg dark:shadow-black/20 object-cover"
                         style="max-height: 650px;"
                         src="{{ asset('/assets/images/hero-photo.jpg') }}"
                         alt=""
                    />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-12 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Услуги</h2>
            </div>
            @foreach($services as $service)
            <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{ $service->name }}</h3>
                    @if($service->short_description)
                        <p class="mt-6 text-lg leading-8 text-gray-600">{{ $service->short_description }}</p>
                    @endif
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Что включено</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    {!! $service->description !!}
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="flex items-baseline justify-center gap-x-2">
                                <span class="text-4xl font-bold tracking-tight text-gray-900">{{ number_format($service->price, 0, ' ', '.') }}</span>
                                <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">₽</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <livewire:user.service-booking-form />
</x-public-layout>
