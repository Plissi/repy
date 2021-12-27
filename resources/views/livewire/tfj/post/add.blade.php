<form wire:submit.prevent="submit">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="lg:grid grid-cols-4 mt-1 space-x-2 hidden">
        <div class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">

        </div>
        <div class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Début
        </div>
        <div class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Fin
        </div>
        <div class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Observations
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="sauve1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Sauvegarde RMAN
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauve1" id="sauve1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauve1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauve2" id="sauve2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauve2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauve3" id="sauve3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauve3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('sauve2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('sauve1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="sauvel1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Sauvegarde logique
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauvel1" id="sauvel1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauvel1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauvel2" id="sauvel2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauvel2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="sauvel3" id="sauvel3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauvel3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('sauvel2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('sauvel1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="site1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Ouverture du site
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site1" id="site1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site2" id="site2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site3" id="site3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('site2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('site1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @if ($report -> bank -> name == 'BCI')
        <div class="grid grid-cols-1 lg:grid-cols-4 mt-1 space-x-2">
            <label for="sldf1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
                Soldes Fusionnés
            </label>
        
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sldf1" id="sldf1" type="time" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sldf1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
        
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sldf2" id="sldf2" type="time" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sldf2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sldf3" id="sldf3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sldf3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
        
            @error('sldf1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        
            @error('sldf2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="mon1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Création fichier solde monétique
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="mon1" id="mon1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mon1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="mon2" id="mon2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mon2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="mon3" id="mon3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mon3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('mon1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('mon2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="info1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Disponibilité Infocentre
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="info1" id="info1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('info1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="info2" id="info2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('info2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
        
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="info3" id="info3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('info3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('info2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('info1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="delta1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Disponibilité Amplitude
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="delta1" id="delta1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('delta1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="delta2" id="delta2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('delta2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
        
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="delta3" id="delta3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('delta3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('delta2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('delta1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="portail1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Disponibilité Portail
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="portail1" id="portail1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('portail1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="portail2" id="portail2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('portail2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="portail3" id="portail3" type="text" class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('portail3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('portail2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('portail1')
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
