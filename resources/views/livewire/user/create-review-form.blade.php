<div>
    <x-modal name="review-form" :show="false" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900">
                Оставить отзыв
            </h2>
            @if(!session()->has('formSuccess'))
                <form wire:submit.prevent="submit" class="feedback-form">
                    @csrf
                    <div class="mt-6">
                        <x-input-label for="service_name" class="sr-only"/>
                        <x-text-input
                            id="service_name"
                            name="service_name"
                            type="text"
                            class="mt-1 block"
                            placeholder="Услуга"
                            wire:model.lazy="service_name"
                            class="form-control @error('service_name') is-invalid @enderror"
                        />
                        @error('service_name')
                        <x-input-error :messages="$message" class="mt-2"/>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <x-input-label for="user_name" class="sr-only"/>
                        <x-text-input
                            id="user_name"
                            name="user_name"
                            type="text"
                            class="mt-1 block"
                            placeholder="Ваше имя"
                            wire:model.lazy="user_name"
                            class="form-control @error('user_name') is-invalid @enderror"
                        />
                        @error('user_name')
                        <x-input-error :messages="$message" class="mt-2"/>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <x-input-label for="review_body" class="sr-only"/>
                        <x-textarea-input
                            id="review_body"
                            name="review_body"
                            type="text"
                            class="mt-1 block"
                            placeholder="Поделитесь эмоциями"
                            wire:model.lazy="review_body"
                            class="form-control @error('review_body') is-invalid @enderror"
                        ></x-textarea-input>
                        @error('review_body')
                        <x-input-error :messages="$message" class="mt-2"/>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <x-input-label for="user_work" class="sr-only"/>
                        <x-text-input
                            id="user_work"
                            name="user_work"
                            type="text"
                            class="mt-1 block"
                            placeholder="{{ __('Ваша работа (необязательно)') }}"
                            wire:model.lazy="user_work"
                            class="form-control @error('user_work') is-invalid @enderror"
                        />
                        @error('user_work')
                        <x-input-error :messages="$message" class="mt-2"/>
                        @enderror
                    </div>



                    <div class="mt-6 flex justify-end gap-2">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            Отменить
                        </x-secondary-button>

                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                            wire:target="submit" wire:loading.attr="disabled"
                        >
                            <span wire:target="submit">Отправить</span>
                        </button>
                    </div>
                </form>
            @else
                <div class="mt-2">
                    <div class="flex items-center w-full w-100 py-4 mb-4 text-gray-500 bg-white rounded-lg" role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="sr-only">Галочка</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">Заявка успешно отправлена.</div>
                    </div>
                </div>
            @endif
        </div>
    </x-modal>
</div>
