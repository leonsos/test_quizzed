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
                                        {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                            class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                            </path>
                                        </svg> --}}
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
