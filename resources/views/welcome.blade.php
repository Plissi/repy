@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-center bg-cover sm:px-6 lg:px-8" style="background-image:linear-gradient(rgba(94, 45, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/email-4284157_960_720.webp')">
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="relative">
                    <div class="space-y-6">
                        <a href="{{ route('home') }}">
                            <h1 class="font-serif text-6xl font-semibold tracking-wider text-center md:text-8xl">
                                {{ config('app.name') }}
                            </h1>
                        </a>
                        <p class="font-serif text-xl text-center text-yellow-50 md:text-3xl">
                            Le Bulletin Qualité Digital
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
