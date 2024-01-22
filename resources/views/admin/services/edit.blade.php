<x-private-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Изменить услугу "{{ $service->name }}"
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data"
                          method="POST">
                        @csrf
                        @method('PUT')

                        @error('formError')
                        <x-input-error :messages="$message"/>
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
                                   placeholder="Услуга"
                                   required
                                   value="{{ old('name', $service->name) }}"
                                   name="name"
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
                                   name="short_description"
                                   value="{{ old('short_description', $service->short_description) }}"
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
                            >{{ old('description', $service->description) }}</textarea>
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
                            <textarea type="text"
                                      id="price"
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                      placeholder="Цена"
                                      required
                                      name="price"
                            >{{ old('price', $service->price) }}</textarea>
                            @error('price')
                            <x-input-error :messages="$message" class="mt-2"/>
                            @enderror
                        </div>

                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Изменить
                        </button>
                        <a href="{{ route('admin.services.index') }}" type="submit"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Назад</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-private-layout>

