@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header :text="__('Register')"/>

                <x-card-body>
                    <x-form :action="route('register')">
                        <x-text-field name="name" :label="__('Name')" grid="md:4,6" required autocomplete="name" autofocus/>

                        <x-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email"/>

                        <x-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="current-password"/>

                        <x-password-field name="password_confirmation" :label="__('Confirm Password')" grid="md:4,6" required autocomplete="new-password"/>

                        <x-row class="form-group mb-0">
                            <x-column grid="md:6" offset="md:4">
                                <x-button type="submit" variant="primary">{{ __('Register') }}</x-button>
                            </x-column>
                        </x-row>
                    </x-form>
                </x-card-body>
            </x-card>
        </x-column>
    </x-row>
</x-container>
@stop
