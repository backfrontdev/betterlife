<div>
    @if(count($requests) > 0)

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3" >
                        Имя
                    </th>
                    <th scope="col" class="px-6 py-3" >
                        Телефон
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TG-аккаунт
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $request->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $request->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $request->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $request->tg_account }}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


        {{ $requests->links() }}
    @else
        <h4>Услуг пока нет.</h4>
    @endif
</div>
