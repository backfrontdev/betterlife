<x-private-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление контентом на сайте
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="font-bold">Контент</h3>
                </div>
                <div class="px-6 text-gray-900 flex flex-col gap-2 mb-6">
                    <x-link :href="route('admin.services.index')">
                        Услуги
                    </x-link>
                    <x-link :href="route('admin.services.index')">
                        Сертификаты
                    </x-link>
                    <x-link :href="route('admin.services.index')">
                        Заявки на обратную связь
                    </x-link>
                </div>
            </div>
        </div>
    </div>
</x-private-layout>
