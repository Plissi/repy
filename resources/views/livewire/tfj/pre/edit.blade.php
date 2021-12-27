<form wire:submit.prevent="submit">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
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

    @if ($report -> bank -> contentieux)
        <div class="grid grid-cols-1 lg:grid-cols-4 mt-1 space-x-2">
            <label for="ctx1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
                Contentieux
            </label>
        
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="ctx1" id="ctx1" type="time" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ctx1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
        
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="ctx2" id="ctx2" type="time" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ctx2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="ctx3" id="ctx3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ctx3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
        
            @error('ctx1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        
            @error('ctx2')
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
            <input wire:model="mon3" id="mon3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('mon3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('mon1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('mon2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @if ($report -> bank -> paywallet)
        <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
            <label for="clts1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
                Génération clients IWOMI
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="clts1" id="clts1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('clts1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="clts2" id="clts2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('clts2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
            
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="clts3" id="clts3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('clts3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('clts2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror

            @error('clts1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
            <label for="sld1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
                Génération solde IWOMI
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sld1" id="sld1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sld1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sld2" id="sld2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sld2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
            
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="sld3" id="sld3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sld3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('sld2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror

            @error('sld1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
            <label for="paywallet1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
                TFJ sur PAYWALLET
            </label>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="paywallet1" id="paywallet1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('paywallet1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="paywallet2" id="paywallet2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('paywallet2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>
            
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="paywallet3" id="paywallet3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('paywallet3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
            </div>

            @error('paywallet2')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror

            @error('paywallet1')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="caisses1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Fermeture des caisses
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="caisses1" id="caisses1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('caisses1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="caisses2" id="caisses2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('caisses2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="caisses3" id="caisses3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('caisses3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('caisses2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('caisses1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 mt-6 space-x-2">
        <label for="site1" class="flex items-center text-sm font-medium leading-5 text-gray-700 justify-self-center">
            Fermeture du site
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site1" id="site1" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site1') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site2" id="site2" type="time" required autofocus class="appearance-none flex items-center w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site2') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>
            
        <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="site3" id="site3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('site3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('site2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('site1')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
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
            <input wire:model="sauve3" id="sauve3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauve3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
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
            <input wire:model="sauvel3" id="sauvel3" type="text" required autofocus class="flex items-center appearance-none w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('sauvel3') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
        </div>

        @error('sauvel2')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @error('sauvel1')
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
