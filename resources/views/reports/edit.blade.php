@extends('layouts.app')

@section('title', 'Modifier un bulletin')

@section('content')
    <div class="">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>

            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Modifier un Bulletin
            </h2>
        </div>

        <div class="max-w-xs mx-auto mt-8 sm:w-full md:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 mt-6 align-middle sm:px-6 lg:px-8">
                            <div class="text-xl font-bold text-center text-gray-900">
                                Quelle section voulez-vous remplir?
                            </div>
                            <div class="mt-4">
                                <span class="flex justify-center w-full px-4 py-2 mx-auto text-center md:w-2/4">
                                    <a href="{{ route('tfj.syntesis.create', ['report' => $report]) }}" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                        Synthèse du TFJ
                                    </a>
                                </span>
                                <span class="flex justify-center w-full px-4 py-2 mx-auto text-center md:w-2/4">
                                    <a href="#" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                        Volume d'intégration des flux
                                    </a>
                                </span>
                                <span class="flex justify-center w-full px-4 py-2 mx-auto text-center md:w-2/4">
                                    <a href="#" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                        Traitements avant TFJ
                                    </a>
                                </span>
                                <span class="flex justify-center w-full px-4 py-2 mx-auto text-center md:w-2/4">
                                    <a href="#" class="flex justify-center w-full px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                        Traitements après TFJ
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('reports.create') }}" data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button" class="absolute flex items-center justify-around w-12 h-12 p-0 text-center transition duration-200 ease-in bg-yellow-600 rounded-full shadow bottom-10 right-10 hover:bg-yellow-700 active:shadow-lg mouse focus:outline-none">
            <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="inline-block w-6 h-6">
                <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601 C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
            </svg>
        </a>
        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ajouter un bulletin
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
@endsection
