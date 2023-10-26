<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約リスト') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
                    <h3 class="text-lg font-bold mb-4">予約一覧</h3>

                    @forelse($reserves as $reserve)
                        <div class="mb-6 p-4 bg-beige text-black hover:text-white rounded">
                            <p class="text-sm font-semibold mb-2">
                                予約日: {{ $reserve->reserve_date }}
                            </p>
                            <p class="text-sm font-semibold mb-2">
                                予約時間: {{ $reserve->reserve_time }}
                            </p>
                            <p class="text-sm font-semibold mb-2">
                                予約者名: {{ $reserve->name }}
                            </p>
                            <p class="text-sm font-semibold mb-2">
                                メールアドレス: {{ $reserve->email }}
                            </p>
                            <p class="text-sm font-semibold mb-2">
                                電話番号: {{ $reserve->tel }}
                            </p>
                            @if ($reserve->comment)
                                <p class="text-sm font-semibold mb-2">
                                    備考: {{ $reserve->comment }}
                                </p>
                            @endif
                        </div>
                    @empty
                        <p class="text-gray-700">予約データはありません。</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
