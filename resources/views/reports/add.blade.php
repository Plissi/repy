@extends('layouts.auth')

@section('title', 'Créer un rapport')

@section('content')
    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>

            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Nouveau Rapport
            </h2>
        </div>

        <div class="max-w-xs mt-8 sm:mx-auto sm:w-full md:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-xl">
                            <div class="px-2 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                                @livewire('reports.add')
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
