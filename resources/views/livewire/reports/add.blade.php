<form class="flex flex-wrap justify-center flex-auto space-x-3 text-center justify-items-stretch" wire:submit.prevent="submit">
    {{-- Stop trying to control. --}}
    <div class="flex-auto">
        <label for="date" class="block font-medium leading-5 text-gray-700">
            Date
        </label>

        <div class="flex flex-col mt-1 rounded-md shadow-sm">
            <input wire:model="date" id="date" type="date" required autofocus class="appearance-none block w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:leading-5 @error('date') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />

            @error('date')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex-auto mt-6 md:mt-0">
        <label for="bank" class="block font-medium leading-5 text-gray-700">
            Banque
        </label>

        <div class="mt-1 rounded-md shadow-sm">
            <select wire:model.lazy="bank" required autofocus class="appearance-none block w-full px-3 py-2 border focus:ring-yellow-500 border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-yellow-300 transition duration-150 ease-in-out sm:leading-5 @error('bank') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                <option selected>Choisir une banque</option>
                @foreach ($banks as $item)
                    <option value="{{ $item -> id }}">{{ $item -> name }}</option>
                @endforeach
            </select>

            @error('bank')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex-auto mt-6">
        <span class="block w-full rounded-md shadow-sm">
            <button type="submit" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                Ajouter 
            </button>
        </span>
    </div>
</form>
