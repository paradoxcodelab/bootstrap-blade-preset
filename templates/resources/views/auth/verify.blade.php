@extends('auth._layouts.main')

@section('content')
<x-bs-container>
    <x-bs-row class="justify-content-center">
        <x-bs-column grid="md:8">
            <x-bs-card>
                <x-bs-card-header :text="__('Verify Your Email Address')"/>

                <x-bs-card-body>
                    <x-bs-session-message type="resent" :text="__('A fresh verification link has been sent to your email address.')"/>

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                    <x-bs-form class="d-inline" :action="route('verification.resend')">
                        <x-bs-button type="submit" variant="link" class="p-0 m-0 align-baseline">{{ __('click here to request another') }}</x-bs-button>.
                    </x-bs-form>
                </x-bs-card-body>
            </x-bs-card>
        </x-bs-column>
    </x-bs-row>
</x-bs-container>
@stop
