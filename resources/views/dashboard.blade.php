<x-private-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Профиль
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Здравствуйте, {{ \Illuminate\Support\Facades\Auth::user()->name }}!
                </div>
                <div class="px-6 text-gray-900 mb-6">
                    Для управления контентом сайта,
                    перейдите в панель администратора и выберите нужный вам раздел.
                </div>
            </div>
        </div>
    </div>
</x-private-layout>
