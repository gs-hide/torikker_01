<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('ご来店予約') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('reserve.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="reserve_date" :value="__('予約日を選択')" />
              <x-text-input id="reserve_date" class="block mt-1 w-full" type="date" name="reserve_date" :value="old('reserve_date')" required autofocus />
              <x-input-error :messages="$errors->get('reserve_date')" class="mt-2" />
            </div>
            
            <div class="flex flex-col mb-4">
              <x-input-label for="reserve_time" :value="__('予約時間を選択')" />
              <x-text-input id="reserve_time" class="block mt-1 w-full" type="time" name="reserve_time" :value="old('reserve_time')" required autofocus />
              <x-input-error :messages="$errors->get('reserve_time')" class="mt-2" />
            </div>
            
              <div class="flex flex-col mb-4">
              <x-input-label for="name" :value="__('予約者名')" />
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
             <div class="flex flex-col mb-4">
              <x-input-label for="email" :value="__('メールアドレス')" />
              <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="flex flex-col mb-4">
              <x-input-label for="tel" :value="__('電話番号')" />
              <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus />
              <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>
            
             <div class="flex flex-col mb-4">
              <x-input-label for="comment" :value="__('備考欄')" />
              <x-text-input id="comment" class="block mt-1 w-full" type="text" name="comment" :value="old('comment')" required autofocus />
              <x-input-error :messages="$errors->get('comment')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('予約確認画面へ') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
