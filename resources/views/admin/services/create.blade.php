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
                    <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                        @csrf

                        @error('formError')
                        {{ $message }}
                        @enderror

                        <div class="mb-5">
                            <label for="name"
                                   class="block mb-2 text-sm font-medium text-gray-900"
                            >
                                Введите название
                            </label>
                            <input type="text"
                                   id="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                   placeholder="Название"
                                   required
                                   name="name"
                                   value="{{ old('name') }}"
                            >
                            @error('name')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>


                        <div class="mb-5">
                            <label for="short_description"
                                   class="block mb-2 text-sm font-medium text-gray-900"
                            >
                                Введите краткое описание
                            </label>
                            <input type="text"
                                   id="short_description"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                   placeholder="Превью"
                                   required
                                   name="short_description"
                                   value="{{ old('short_description') }}"
                            >
                            @error('short_description')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>


                        <div class="mb-5">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-gray-900"
                            >
                                Введите описание
                            </label>
                            <textarea type="text"
                                   id="description"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                   placeholder="Описание"
                                   required
                                   name="description"
                            >{{ old('description') }}</textarea>
                            @error('description')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>


                        <div class="mb-5">
                            <label for="price"
                                   class="block mb-2 text-sm font-medium text-gray-900"
                            >
                                Введите цену
                            </label>
                            <input type="text"
                                   id="price"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                   placeholder="Цена"
                                   required
                                   name="price"
                                   value="{{ old('price') }}"
                            >
                            @error('price')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>

                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Добавить
                        </button>
                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                           href="{{ route('admin.services.index') }}"
                        >
                            Назад
                        </a>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <
</x-private-layout>
