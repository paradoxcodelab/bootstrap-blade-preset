@extends('auth._layouts.app')

@section('content')
<x-bs-container>
    <x-bs-row class="justify-content-center">
        <x-bs-column grid="md:8">
            <x-bs-card>
                <x-bs-card-header :text="__('Register')"/>

                <x-bs-card-body>
                    <x-bs-form :action="route('register')">
                        <x-bs-text-field name="name" :label="__('Name')" grid="md:4,6" required autocomplete="name" autofocus/>

                        <x-bs-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email"/>

                        <x-bs-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="current-password"/>

                        <x-bs-password-field name="password_confirmation" :label="__('Confirm Password')" grid="md:4,6" required autocomplete="new-password"/>

                        <x-bs-row class="form-group mb-0">
                            <x-bs-column grid="md:6" offset="md:4">
                                <x-bs-button type="submit" variant="primary">{{ __('Register') }}</x-bs-button>
                            </x-bs-column>
                        </x-bs-row>
                    </x-bs-form>
                </x-bs-card-body>
            </x-bs-card>
        </x-bs-column>
    </x-bs-row>
</x-bs-container>
@stop
