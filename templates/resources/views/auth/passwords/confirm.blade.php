@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header class="card-header" :text="__('Confirm Password')"/>

                <x-card-body>
                    {{ __('Please confirm your password before continuing.') }}

                    <x-form :action="route('password.confirm')">
                        <x-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="current-password"/>

                        <x-row class="form-group mb-0">
                            <x-column grid="md:8" offset="md:4">
                                <x-button type="submit" variant="primary">{{ __('Confirm Password') }}</x-button>

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
