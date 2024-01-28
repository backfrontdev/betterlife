<x-public-layout>
    <div class="py-12 text-center lg:my-12 lg:text-left">
        <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="mt-12 lg:mt-0">
                    <h1 class="mb-4 text-4xl font-bold tracking-tight md:text-5xl xl:text-6xl">
                        Life-коуч <br/><span>Екатерина Старцева</span>
                    </h1>
                    <p class="mb-6 text-xl">
                        Улучшите свою жизнь благодаря услугам коучинга, выберите услугу, подходящую под ваш запрос, и
                        начните преображение уже сегодня!
                    </p>
                    <button
                        class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-1xl px-5 py-2.5 text-center me-2 mb-2"
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
    <div class="bg-white py-6 sm:py-12 rounded my-4" id="about">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Обо мне</h2>
            </div>
            <p class="mt-4 leading-8">
                Я решила стать коучем, потому что в наше время многие люди сталкиваются с трудностями в самоорганизации
                и разработке плана действий. Очень часто людям требуется помощь в определении целей и стратегий, а также
                нахождении ответов на свои вопросы. В этом и заключается ценность коучинга - на сессиях с клиентами мы
                разрабатываем планы, стратегии и находим все необходимые ответы, которые позволят им развиваться как
                экспертам и личностям.
            </p>
            <p class="mt-1 leading-8">
                Я осуществляю индивидуальный подход к каждому клиенту и учитываю его особенности и темп. Если клиент
                хочет исследовать определенную область своих проблем, мы фокусируемся на ней. Если же человек не хочет
                этого, то мы исследуем другие аспекты его запроса. Я не заставляю и не навязываю свое мнение клиенту.
            </p>
            <p class="mt-1 leading-8">
                Коуч - это профессия, которая дает значительную поддержку человеку. Благодаря коучу человек может найти
                опору внутри себя и осознать, что все ответы уже находятся в егонутри. В рамках наших сессий
                разрабатываются всесторонние стратегии, которые помогают клиентам начать реализовывать себя и
                становиться более уверенными. Важно понимать, что когда человек обращается к коучу, он должен быть готов
                взять на себя ответственность, поскольку все действия и достижения будут зависеть от него самого. Коуч
                лишь направляет клиента к его собственным ответам и помогает формулировать вопросы, но увидеть
                результаты и достичь своих целей сможет только сам человек.
            </p>
        </div>
    </div>
    <div class="bg-white py-6 sm:py-12 rounded my-4" id="certificates">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Сертификаты</h2>
            </div>
            <div class="flex gap-4 mt-4">
                <div class="block p-1 bg-white border border-gray-200 rounded-lg shadow mx-auto">
                    <img class="w-full rounded-lg shadow-lg dark:shadow-black/20 object-cover"
                         src="{{ asset('/assets/images/certificate-1.jpg') }}"
                         alt=""
                         style="max-width: 600px;"
                    />
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white py-6 sm:py-12 rounded" id="services">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Услуги</h2>
            </div>
            @foreach($services as $service)
                <div
                    class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                    <div class="p-8 sm:p-10 lg:flex-auto">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">{{ $service->name }}</h3>
                        @if($service?->short_description)
                            <p class="mt-6 text-lg leading-8 text-gray-600">{{ $service->short_description }}</p>
                        @endif
                        <div class="mt-10 flex items-center gap-x-4">
                            <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">Что включено</h4>
                            <div class="h-px flex-auto bg-gray-100"></div>
                        </div>
                        @php
                            $includesList = explode(PHP_EOL, $service->description);
                        @endphp
                        <ul role="list"
                            class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                            @foreach($includesList as $include)
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                         fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    {{ $include }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                        <div
                            class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                            <div class="mx-auto max-w-xs px-8">
                                <p class="flex items-baseline justify-center gap-x-2">
                                    <span
                                        class="text-4xl font-bold tracking-tight text-gray-900">{{ number_format($service->price, 0, ' ', '.') }}</span>
                                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">₽</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-white py-6 sm:py-14 mt-4 rounded" id="reviews">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto lg:mx-0">
                <div class="mx-auto max-w-2xl sm:text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Отзывы</h2>
                </div>
                @if(!empty($reviews))
                    <p class="mt-2 text-lg leading-8 text-gray-600">Узнайте больше из отзывов реальных людей</p>
                @else
                    <p class="mt-2 text-lg leading-8 text-gray-600">Отзывов пока нет, вы можете стать первым!</p>
                @endif
                <button
                    class="mt-4 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-1xl px-5 py-2.5 text-center me-2 mb-2"
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'review-form')"
                >
                    Оставить отзыв
                </button>
            </div>
            @if($reviews)
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @foreach($reviews as $review)
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="{{ $review->created_at->format('Y-m-d') }}"
                                      class="text-gray-500">{{ $review->created_at->format('d.m.Y') }}</time>
                                <span
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $review->service_name }}</span>
                            </div>
                            <div class="group relative">
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    {{ $review->review_body }}
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">{{ $review->user_name }}</p>
                                    <p class="text-gray-600">{{ $review->user_work }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <livewire:user.service-booking-form/>
    <livewire:user.create-review-form/>
</x-public-layout>
