<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">    
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 w-full sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                    <select wire:model.defer="gender" autocomplete="country-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select your gender</option>
                                        <option value="female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>                                    
                                    <x-jet-input-error for='gender' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                                    <select wire:model.defer="age" autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>select your age range</option>
                                        <option value="18-25">18-25 of age</option>
                                        <option value="26-33">26-33 of age</option>
                                        <option value="34-40">34-40 of age</option>
                                        <option value="40">40+ of age</option>
                                    </select>
                                    <x-jet-input-error for='age' />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="favoriteSocialNetwork"
                                        class="block text-sm font-medium text-gray-700">Favorite social network</label>
                                    <select wire:model.defer="favoriteSocialNetwork" autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select social network...</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Tiktok">Tiktok</option>
                                    </select>
                                    <x-jet-input-error for='favoriteSocialNetwork' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="timeOnFacebook" class="block text-sm font-medium text-gray-700">Average
                                        time per day on Facebook</label>
                                    <select wire:model.defer='timeOnFacebook' autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select time in hours...</option>
                                        <option value="1">1 hours</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                    </select>
                                    <x-jet-input-error for='timeOnFacebook' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="timeOnTiktok" class="block text-sm font-medium text-gray-700">Average
                                        time per day on TikTok</label>
                                    <select wire:model.defer='timeOnTiktok' autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select time in hours...</option>
                                        <option value="1">1 hours</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                    </select>
                                    <x-jet-input-error for='timeOnTiktok' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="timeOnInstagram" class="block text-sm font-medium text-gray-700">Average
                                        time per day on Instagram</label>
                                    <select wire:model.defer='timeOnInstagram' autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select time in hours...</option>
                                        <option value="1">1 hours</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                    </select>
                                    <x-jet-input-error for='timeOnInstagram' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="timeOnTwitter" class="block text-sm font-medium text-gray-700">Average
                                        time per day on Twitter</label>
                                    <select wire:model.defer='timeOnTwitter' autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select time in hours...</option>
                                        <option value="1">1 hours</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                    </select>
                                    <x-jet-input-error for='timeOnTwitter' />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="timeOnWhatsApp" class="block text-sm font-medium text-gray-700">Average
                                        time per day on WhatsApp</label>
                                    <select wire:model.defer='timeOnWhatsApp' autocomplete=""
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option selected>Select time in hours...</option>
                                        <option value="1">1 hours</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                        <option value="4">4 hours</option>
                                        <option value="5">5 hours</option>
                                        <option value="6">6 hours</option>
                                        <option value="7">7 hours</option>
                                        <option value="8">8 hours</option>
                                        <option value="9">9 hours</option>
                                        <option value="10">10 hours</option>
                                    </select>
                                    <x-jet-input-error for='timeOnWhatsApp' />
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 py-3 bg-gray-50  sm:px-6 flex justify-between">   
                            <div wire:loading wire:target='save' class="flex justify-center items-center">
                                <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-gray-900"></div>
                            </div>   
                            @if (!$count=='1')
                                
                            <button type="button" wire:click='save'
                                class="inline-flex justify-center
                                 py-2 px-4 border border-transparent 
                                 shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                            </button>
                            @else
                            <button type="button" wire:click='save' disabled
                            class="inline-flex justify-center
                             py-2 px-4 border border-transparent 
                             shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                            </button>
                            <p class="text-sm text-red-600">Please logout!!</p>
                            @endif                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
