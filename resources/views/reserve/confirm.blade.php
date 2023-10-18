<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約内容確認') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
                    <h3 class="text-lg font-bold mb-4">予約情報確認</h3>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="reserve_date">
                            予約日:
                        </label>
                        <p>{{ $reserve->reserve_date }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="reserve_time">
                            予約時間:
                        </label>
                        <p>{{ $reserve->reserve_time }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            予約者名:
                        </label>
                        <p>{{ $reserve->name }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            メールアドレス:
                        </label>
                        <p>{{ $reserve->email }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tel">
                            電話番号:
                        </label>
                        <p>{{ $reserve->tel }}</p>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                            備考:
                        </label>
                        <p>{{ $reserve->comment }}</p>
                    </div>

                    <!-- 予約完了ボタン -->
                    <a href="{{ route('reserve.complete', $reserve->id) }}"
                        class="bg-beige text-black hover:bg-gray-800 font-bold py-2 px-4 rounded">
                        予約を確定する
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
