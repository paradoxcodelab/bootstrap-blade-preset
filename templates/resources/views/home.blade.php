@extends('auth._layouts.app')

@section('content')
<x-bs-container>
    <x-bs-row class="justify-content-center">
        <x-bs-column grid="md:8">
            <x-bs-card>
                <x-bs-card-header :text="__('Dashboard')"/>

                <x-bs-card-body>
                    <x-bs-session-message/>

                    {{ __('You are logged in!') }}
                </x-bs-card-body>
            </x-bs-card>
        </x-bs-column>
    </x-bs-row>
</x-bs-container>
@stop
