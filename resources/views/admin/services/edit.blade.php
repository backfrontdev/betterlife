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
                    <form method="POST" action="{{ route('admin.services.update', $service) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @error('formError')
                        <div class="danger alert-danger p-2 mb-2 fadeInLeft">
                            <i class="fas fa-times-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-3">
                            <label for="name" class="form-label">Введите название</label>
                            <input type="text" name="name" value="{{ old('name', $service->name) }}" class="form-control @error('name') is-invalid @enderror" id="name" max="255">
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

