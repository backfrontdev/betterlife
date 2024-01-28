<div>
    @if(count($reviews) > 0)
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Услуга
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Содержание
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Пользователь
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Работа
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Статус отзыва
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $review->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $review->service_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->review_body }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->user_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->user_work }}
                        </td>
                        <td class="px-6 py-4">
                            @if($review->verified_at)
                                <button type="button" wire:click="decline('{{ $review->id }}')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Отклонить</button>
                            @else
                                <button type="button" wire:click="accept('{{ $review->id }}')" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Одобрить</button>
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


        {{ $reviews->links() }}
    @else
        <h4>Отзывов пока нет.</h4>
    @endif
</div>
