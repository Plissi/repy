@extends('layouts.app')

@section('title', 'Bulletins')

@section('content')
    <div class="">
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>

            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Bulletins qualité
            </h2>
        </div>

        <div class="max-w-xs mx-auto mt-8 sm:w-full md:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div x-data="{ open: false }">
                            <button class="flex justify-center w-full px-4 py-2 mx-auto font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md shadow-sm md:w-1/3 hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700" @click="open = ! open">
                                <span :class="open ? 'hidden' : ''">Nouveau bulletin</span>
                                <span :class="open ? '' : 'hidden'"">Cacher</span>
                            </button>
                         
                            <div x-show="open" x-transition class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                                @livewire('reports.add')
                            </div>
                        </div>
                        <div class="inline-block min-w-full py-2 mt-6 align-middle sm:px-6 lg:px-8">
                            @if ($reports -> count() == 0)
                                <div class="text-center">
                                    Pas de bulletins disponibles
                                </div>
                            @else
                                <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                                    @foreach ($reports as $report)
                                        <div class="max-w-sm p-6 text-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$report -> date}}</h5>
                                            <div class="flex justify-center">
                                                <a href="#" class="flex justify-center w-1/2 px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                                    Consulter
                                                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                                <a href="{{ route('reports.edit', ['eod_report'=> $report]) }}" class="flex justify-center w-1/2 px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-yellow-600 border border-transparent rounded-md hover:bg-yellow-500 focus:outline-none focus:border-yellow-700 focus:ring-yellow active:bg-yellow-700">
                                                    Modifier
                                                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            {{ $reports->links() }}
            </div>
        </div>
        <a href="{{ route('reports.create') }}" data-tooltip-target="tooltip-left" data-tooltip-placement="left" type="button" class="absolute flex items-center justify-around w-12 h-12 p-0 text-center transition duration-200 ease-in bg-yellow-600 rounded-full shadow bottom-10 right-10 hover:bg-yellow-700 active:shadow-lg mouse focus:outline-none">
            <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="inline-block w-6 h-6">
                <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601 C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399 C15.952,9,16,9.447,16,10z" />
            </svg>
        </a>
        <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ajouter un bulletin
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
@endsection
