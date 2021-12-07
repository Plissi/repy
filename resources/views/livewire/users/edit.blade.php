@extends('layouts.auth')

@section('title', 'Modifier')

@section('content')
<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
            Modifier ce compte
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('users.store', ['id'=> $user->id]) }}">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                        Nom d'utilisateur
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input name="name" value="{{ $user -> name }}" id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="matricule" class="block text-sm font-medium leading-5 text-gray-700">
                        Matricule
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input name="matricule" value="{{ $user -> matricule }}"" id="matricule" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('matricule') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('matricule')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="role" class="block text-sm font-medium leading-5 text-gray-700">
                        Role
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <select name="role" id="role" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('role') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                <option value="0" @if ($user -> role == 0 ) selected @endif>Manager</option>
                                <option value="1" @if ($user -> role == 1 ) selected @endif>Exploitant</option>
                                <option value="2" @if ($user -> role == 2 ) selected @endif>Admin</option>
                            @switch($user -> role)
                                @case(2)
                                    @break
                                @case(1)
                                    @break
                                @default
                            @endswitch
                        </select>
                    </div>

                    @error('role')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Adresse Email
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input name="email" value="{{ $user -> email }}"" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700">
                            Enregistrer 
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

