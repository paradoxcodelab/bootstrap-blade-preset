@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header :text="__('Verify Your Email Address')"/>

                <x-card-body>
                    <x-session-message type="resent" :text="__('A fresh verification link has been sent to your email address.')"/>

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                    <x-form class="d-inline" :action="route('verification.resend')">
                        <x-button type="submit" variant="link" class="p-0 m-0 align-baseline">{{ __('click here to request another') }}</x-button>.
                    </x-form>
                </x-card-body>
            </x-card>
        </x-column>
    </x-row>
</x-container>
@stop
