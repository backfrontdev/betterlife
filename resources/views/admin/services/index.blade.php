<x-private-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <span>Список услуг</span>
        </h2>
        <a class="btn" href="{{ route('admin.services.create') }}">
            Добавить
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:admin.services-list />
                </div>
            </div>
        </div>
    </div>
</x-private-layout>
