@extends('auth._layouts.main')

@section('content')
<x-bs-container>
    <x-bs-row class="justify-content-center">
        <x-bs-column grid="md:8">
            <x-bs-card>
                <x-bs-card-header :text="__('Login')"/>

                <x-bs-card-body>
                    <x-bs-form :action="route('login')">
                        <x-bs-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email" autofocus/>

                        <x-bs-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="current-password"/>

                        <x-bs-checkbox-field name="remember" :label="__('Remember Me')" grid="md:4,6" value="remember"/>

                        <x-bs-row class="form-group mb-0">
                            <x-bs-column grid="md:8" offset="md:4">
                                <x-bs-button type="submit" variant="primary">{{ __('Login') }}</x-bs-button>

                                <x-bs-button link variant="link" :href="route('password.request')">{{ __('Forgot Your Password?') }}</x-bs-button>
                            </x-bs-column>
                        </x-bs-row>
                    </x-bs-form>
                </x-bs-card-body>
            </x-bs-card>
        </x-bs-column>
    </x-bs-row>
</x-bs-container>
@stop
