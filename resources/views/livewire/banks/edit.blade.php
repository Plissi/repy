<form wire:submit.prevent="submit">
    {{-- Do your work, then step back. --}}
    <div>
        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
            Nom de la banque {{ $bank -> name }}
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-6">
        <label for="monetique" class="block text-sm font-medium leading-5 text-gray-700">
            Monétique
        </label>
        <div class="flex flex-row mt-1 space-x-2">
            <div class="flex items-center">
                <input wire:model="monetique" name="monetique" type="radio" value="1" required class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('monetique') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Oui
                </label>
            </div>
            <div class="flex items-center">
                <input wire:model="monetique" name="monetique" type="radio" value="0" class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('monetique') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Non
                </label>
            </div>
        </div>

        @error('monetique')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mt-6">
        <label for="paywallet" class="block text-sm font-medium leading-5 text-gray-700">
            Paywallet
        </label>
        <div class="flex flex-row mt-1 space-x-2">
            <div class="flex items-center">
                <input wire:model="paywallet" name="paywallet" type="radio" value="1" required class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('paywallet') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Oui
                </label>
            </div>
            <div class="flex items-center">
                <input wire:model="paywallet" name="paywallet" type="radio" value="0" class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('paywallet') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Non
                </label>
            </div>
        </div>
    
        <div class="mt-6">
            <label for="contentieux" class="block text-sm font-medium leading-5 text-gray-700">
                Contentieux
            </label>
            <div class="flex flex-row mt-1 space-x-2">
                <div class="flex items-center">
                    <input wire:model="contentieux" name="contentieux" type="radio" value="1" required class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('contentieux') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red-600 @enderror"/>
                    <label class="block ml-3 text-sm font-medium text-gray-700">
                        Oui
                    </label>
                </div>
                <div class="flex items-center">
                    <input wire:model="contentieux" name="contentieux" type="radio" value="0" class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('contentieux') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red-600 @enderror"/>
                    <label class="block ml-3 text-sm font-medium text-gray-700">
                        Non
                    </label>
                </div>
            </div>

        @error('contentieux')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-6">
        <label for="flux" class="block text-sm font-medium leading-5 text-gray-700">
            Intégration de flux
        </label>
        <div class="flex flex-row mt-1 space-x-2">
            <div class="flex items-center">
                <input wire:model="flux" name="flux" type="radio" value="1" required class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('flux') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Oui
                </label>
            </div>
            <div class="flex items-center">
                <input wire:model="flux" name="flux" type="radio" value="0" class="w-4 h-4 text-yellow-600 border-gray-300 focus:ring-yellow-500 @error('flux') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                <label class="block ml-3 text-sm font-medium text-gray-700">
                    Non
                </label>
            </div>
        </div>

        @error('flux')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mt-6">
        <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                Ajouter 
            </button>
        </span>
    </div>
</form>
