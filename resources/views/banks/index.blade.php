@extends('layouts.app')

@section('title', 'Banques')

@section('content')
    <div class="">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>

            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Banques
            </h2>
        </div>

        <div class="max-w-xs mt-8 sm:mx-auto sm:w-full md:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            @if ($banks -> count() == 0)
                                <div class="text-center">
                                    Pas de banques disponibles
                                </div>
                                <span class="w-1/3 text-center rounded-md shadow-sm ">
                                    <a href="{{ route('banks.create') }}" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">Ajouter une banque</a>
                                </span>
                            @else
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Nom</th>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Monétique</th>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Paywallet</th>
                                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Contentieux</th>
                                            <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($banks as $bank)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $bank -> name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @switch($bank -> monetique)
                                                        @case(0)
                                                            Non
                                                            @break
                                                        @case(1)
                                                            Oui
                                                            @break
                                                        @default
                                                            Non
                                                    @endswitch
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @switch($bank -> paywallet)
                                                        @case(0)
                                                            Non
                                                            @break
                                                        @case(1)
                                                            Oui
                                                            @break
                                                        @default
                                                            Non
                                                    @endswitch
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @switch($bank -> contentieux)
                                                        @case(0)
                                                            Non
                                                            @break
                                                        @case(1)
                                                            Oui
                                                            @break
                                                        @default
                                                            Non
                                                    @endswitch
                                                </td>
                                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                <a href="{{ route('banks.edit', ['id' => $bank -> id]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            {{ $banks->links() }}
            </div>
        </div>
        <a href="{{ route('banks.create') }}" data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button" class="absolute flex items-center justify-around w-12 h-12 p-0 text-center transition duration-200 ease-in bg-yellow-600 rounded-full shadow bottom-10 right-10 hover:bg-yellow-700 active:shadow-lg mouse focus:outline-none">
            <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="inline-block w-6 h-6">
                <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601 C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
            </svg>
        </a>
        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ajouter une banque
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
@endsection
