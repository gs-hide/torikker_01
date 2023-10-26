<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約完了') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
                    <h3 class="text-lg font-bold mb-4">予約が完了しました</h3>

                  <!-- トップ画面に戻るボタン -->
                    <a href="{{ url('/') }}"
                        class="bg-gray-400 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">トップ画面に戻る</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
