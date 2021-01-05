@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header :text="__('Login')"/>

                <x-card-body>
                    <x-form :action="route('login')">
                        <x-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email" autofocus/>

                        <x-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="current-password"/>

                        <x-checkbox-field name="remember" :label="__('Remember Me')" grid="md:4,6" value="remember"/>

                        <x-row class="form-group mb-0">
                            <x-column grid="md:8" offset="md:4">
                                <x-button type="submit" variant="primary">{{ __('Login') }}</x-button>

                                <x-button link variant="link" :href="route('password.request')">{{ __('Forgot Your Password?') }}</x-button>
                            </x-column>
                        </x-row>
                    </x-form>
                </x-card-body>
            </x-card>
        </x-column>
    </x-row>
</x-container>
@stop
