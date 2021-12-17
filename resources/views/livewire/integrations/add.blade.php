<form class="flex flex-wrap justify-center flex-auto space-x-3 text-center justify-items-stretch" wire:submit.prevent="submit">
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="flex-auto mt-6 md:mt-0">
        <label for="flux" class="block font-medium leading-5 text-gray-700">
            Flux
        </label>

        <div class="grid mt-1 rounded-md">
            <select wire:model.lazy="flux" required autofocus class="appearance-none flex justify-self-center w-full md:w-3/5 px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:leading-5 @error('flux') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                <option selected>Choisir un flux</option>
                @foreach ($list as $item)
                    <option value="{{ $item -> id }}">{{ $item -> name }}</option>
                @endforeach
            </select>

            @error('flux')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex-auto mt-6 md:mt-0">
        <label for="mvts" class="block font-medium leading-5 text-gray-700">
            Mouvements
        </label>

        <div class="grid mt-1 rounded-md">
            <input wire:model="mvts" id="mvts" type="number" required autofocus class="appearance-none flex justify-self-center w-full md:w-3/5 px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:leading-5 @error('mvts') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />

            @error('mvts')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex-auto mt-6">
        <span class="block w-full md:w-3/5 rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                Ajouter 
            </button>
        </span>
    </div>
</form>
