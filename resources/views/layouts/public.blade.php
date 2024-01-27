<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-slate-100">
<header class="border-b">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 text-xl font-bold sm:text-4xl">
                Better Life
            </a>
        </div>
        @if(false)
            <div class="flex lg:hidden">
                <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Открыть основное меню</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
        @endif
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Сертификаты</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Услуги</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Обо мне</a>
        </div>
    </nav>
    @if(false)
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="/" class="-m-1.5 p-1.5 text-3xl font-bold">
                        Better Life
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Закрыть меню</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="{{ @route('index') }}"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                Сертификаты
                            </a>
                            <a href="{{ @route('index') }}"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                Услуги
                            </a>
                            <a href="{{ @route('index') }}"
                               class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                Обо мне
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</header>
<div class="max-w-7xl mx-auto p-6 lg:px-8">
    {{ $slot }}
</div>
<footer class="bg-transparent shadow border-t">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center">© {{ date('Y') }} <a href="/" class="hover:underline">Better Life</a>. Все права защищены.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Сертификаты</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Услуги</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Обо мне</a>
            </li>
            <li>
                <a href="https://katrinllandtg.t.me/" class="hover:underline" target="_blank">Telegram</a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>
