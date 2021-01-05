@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header :text="__('Dashboard')"/>

                <x-card-body>
                    <x-session-message/>

                    {{ __('You are logged in!') }}
                </x-card-body>
            </x-card>
        </x-column>
    </x-row>
</x-container>
@stop
