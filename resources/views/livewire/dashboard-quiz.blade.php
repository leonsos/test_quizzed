<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 ">
                    <div class="text-start w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 h-64">
                        <livewire:livewire-column-chart
                            :column-chart-model="$columnChartModel"
                        />                        
                    </div>
                    <div class="text-start w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 h-64">
                        <livewire:livewire-column-chart
                            :column-chart-model="$timePromedio"
                        />                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
