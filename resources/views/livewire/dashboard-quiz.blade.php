<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex justify-between">
        {{-- <p>Favorite: {{$dataFav[0]}}</p> --}}
        <button type="button" disabled
            class="py-2 px-4 border border-transparent 
                             shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Favorite: {{$dataFav[0]}}
        </button>
        <button type="button" disabled
            class="py-2 px-4 border border-transparent 
                             shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Quiz send: {{ $FavoriteSocialNetwork }}
        </button>
        {{-- <p>Quiz send: {{ $FavoriteSocialNetwork }}</p> --}}
        <button type="button" disabled
            class="py-2 px-4 border border-transparent 
                             shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Less dear: {{ $dataLess[0] }}
        </button>
        {{-- <p>Less dear: {{ $dataLess[0] }}</p> --}}
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 ">
                    <div class="text-start w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 h-64">
                        <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                            :column-chart-model="$columnChartModel" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 ">
                    <div class="text-start w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 h-64">
                        <livewire:livewire-column-chart key="{{ $timePromedio->reactiveKey() }}"
                            :column-chart-model="$timePromedio" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 ">
                    <div class="text-start w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 h-64">
                        <livewire:livewire-column-chart key="{{ $age->reactiveKey() }}" :column-chart-model="$age" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
