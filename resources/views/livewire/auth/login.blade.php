@section('title', 'Se connecter')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-yellow-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
            Se connecter
        </h2>
        @if (Route::has('register'))
            <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
                Or
                <a href="{{ route('register') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">
                    Créer un compte
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="matricule" class="block text-sm font-medium leading-5 text-gray-700">
                        Matricule
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="matricule" id="matricule" name="matricule" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-yellow-600 focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('matricule') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('matricule')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Mot de Passe
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-yellow-600 focus:border-yellow-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="w-4 h-4 text-yellow-600 transition duration-150 ease-in-out form-checkbox focus:border-yellow-700 focus:ring-yellow-600" />
                        <label for="remember" class="block ml-2 text-sm leading-5 text-gray-900">
                            Rester connecté 
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-yellow-600 transition duration-150 ease-in-out hover:text-yellow-500 focus:outline-none focus:underline">
                            Mot de passe oublié?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow-600 active:bg-yellow-700">
                            Se connecter
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
