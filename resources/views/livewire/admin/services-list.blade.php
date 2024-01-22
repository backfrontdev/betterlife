<div>
    @if(count($services) > 0)

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3" wire:click="sortBy('id')">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3" wire:click="sortBy('name')">
                        Название
                    </th>
                    <th scope="col" class="px-6 py-3" wire:click="sortBy('price')">
                        Цена
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Действия
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $service->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $service->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->price }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-primary mx-1">Изменить</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                      class="mx-1 form-delete">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


        {{ $services->links() }}
    @else
        <h4>Услуг пока нет.</h4>
    @endif
</div>
