@extends('auth._layouts.main')

@section('content')
<x-bs-container>
    <x-bs-row class="justify-content-center">
        <x-bs-column grid="md:8">
            <x-bs-card>
                <x-bs-card-header :text="__('Reset Password')"/>

                <x-bs-card-body>
                    <x-bs-form :action="route('password.update')">
                        <x-bs-input type="hidden" name="token" :value="$token"/>

                        <x-bs-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email" autofocus/>

                        <x-bs-password-field name="password" :label="__('Password')" grid="md:4,6" required autocomplete="new-password"/>

                        <x-bs-password-field name="password_confirmation" :label="__('Confirm Password')" grid="md:4,6" required autocomplete="new-password"/>

                        <x-bs-row class="form-group mb-0">
                            <x-bs-column grid="md:6" offset="md:4">
                                <x-bs-button type="submit" variant="primary">{{ {{ __('Reset Password') }} }}</x-bs-button>
                            </x-bs-column>
                        </x-bs-row>
                    </x-bs-form>
                </x-bs-card-body>
            </x-bs-card>
        </x-bs-column>
    </x-bs-row>
</x-bs-container>
@stop
