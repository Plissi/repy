<form wire:submit.prevent="submit">
    {{-- Success is as dangerous as failure. --}}
    <div class="grid grid-cols-2 mt-1 space-x-2">
        <label for="debut" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Début TFJ
        </label>
    
        <div class="rounded-md shadow-sm">
            <input wire:model="debut" id="debut" type="time" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('debut') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
    
        @error('debut')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 mt-6 space-x-2">
        <label for="fin" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Fin TFJ
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="fin" id="fin" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('fin') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('fin')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 mt-6 space-x-2">
        <label for="duree" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Durée TFJ
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="duree" id="duree" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('duree') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('duree')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 mt-6 space-x-2">
        <label for="evenements" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Evénements
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="evenements" id="evenements" type="number" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('evenements') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('evenements')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 mt-6 space-x-2">
        <label for="mouvements" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Mouvements
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="mouvements" id="mouvements" type="number" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mouvements') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('mouvements')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 mt-6 space-x-2">
        <label for="transfert_sda" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Transfert SDA
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="transfert_sda" id="transfert_sda" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('transfert_sda') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('transfert_sda')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="flex content-center mt-6 space-x-2">
        <span class="flex items-center w-full rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                Ajouter 
            </button>
        </span>
    </div>
</form>
