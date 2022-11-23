@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="flex flex-col justify-around h-full">
            <nav class="flex justify-start">
                <a href="/wrestlers">Back to Wrestlers Home</a>
            </nav>
            <div>
                <h1 class="mb-6 text-gray-600 text-center font-light tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    {{ $info->name }} Profile
                </h1>
                <div class="text-center">
                    <p class="">Billed from: {{ $info->billedFrom }}</p>
                    <p>Height: {{ $info->height }}</p>
                    <p>Weight: {{ $info->weight }}</p>
                    <p>Signature: {{ $info->signature }}</p>
                    <p>Finisher: {{ $info->finisher }}</p>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection