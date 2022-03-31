<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <!-- component -->
                        <section class="container mx-auto p-6 font-mono">
                            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                <div class="w-full ">
                                    <input type="search" wire:model='search'
                                        class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <span
                                        class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                                        id="basic-addon2">                                        
                                    </span>
                                    <table class="w-full">
                                        <thead>
                                            <tr
                                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                                <th class="px-4 py-3">Name</th>
                                                {{-- <th class="px-4 py-3">Age</th> --}}
                                                <th class="px-4 py-3">Email</th>
                                                <th class="px-4 py-3">Created</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            @foreach ($users as $user)
                                                <tr class="text-gray-700">
                                                    <td class="px-4 py-3 border">
                                                        <div class="flex items-center text-sm">
                                                            <div>
                                                                <p class="font-semibold text-black">{{ $user->name }}
                                                                </p>
                                                                {{-- <p class="text-xs text-gray-600">Developer</p> --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <td class="px-4 py-3 text-ms font-semibold border">22</td> --}}
                                                    <td class="px-4 py-3 text-xs border">
                                                        <span
                                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                            {{ $user->email }} </span>
                                                    </td>
                                                    <td class="px-4 py-3 text-sm border">
                                                        {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{-- @empty
                                                <div class="px-6 py-4 text-red-700 text-center">
                                                    without information
                                                </div> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
