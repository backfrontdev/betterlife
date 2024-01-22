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
                    <form class="" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

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
                                   placeholder="Услуга"
                                   required
                                   value="{{ old('description', $service->name) }}"
                            >
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
                                   placeholder="Описание"
                                   required
                                   name="short_description"
                                   value="{{ old('description', $service->short_description) }}"
                            >
                        </div>

                        <div class="mb-5">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <div class="flex items-start mb-5">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Remember me</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </form>

                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name" max="255">
                            @error('name')
                            <span class="invalid-feedback fadeInLeft" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Введите описание</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" id="description">{{ old('description', $service->description) }}</textarea>
                            @error('description')
                            <span class="invalid-feedback fadeInLeft" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Цена</label>
                            <input type="number" step="0.01" name="price" value="{{ old('price', $service->price) }}" class="form-control @error('price') is-invalid @enderror" id="price">
                            @error('price')
                            <span class="invalid-feedback fadeInLeft" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-green">Изменить</button>
                    </form>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-green-outline mt-3"><i class="fas fa-arrow-left"></i> Назад</a>
                </div>
            </div>
        </div>
    </div>
</x-private-layout>

