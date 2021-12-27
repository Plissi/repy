@extends('layouts.app')

@section('title', 'Travaux avant TFJ')

@section('content')
    <div>
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-24 mx-auto" />
            </a>

            <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
                Travaux avant TFJ du {{ date('d-m-Y', strtotime($report -> date)) }} de la <span class="uppercase">{{ $report -> bank -> name }}</span>
            </h2>
        </div>

        <div class="max-w-xs mx-auto mt-8 sm:w-full md:max-w-4xl">
            <div class="px-4 bg-white shadow sm:rounded-lg sm:px-10">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle">
                        <div class="py-8 max-w-md bg-white shadow sm:rounded-lg mt-8 sm:mx-auto sm:w-full lg:max-w-xl">
                            <div class="py-8 bg-white shadow sm:rounded-lg sm:px-10">
                                @livewire('tfj.pre.edit', ['report' => $report])
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
