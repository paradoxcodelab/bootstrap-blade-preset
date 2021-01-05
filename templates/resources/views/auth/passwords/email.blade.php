@extends('auth._layouts.main')

@section('content')
<x-container>
    <x-row class="row justify-content-center">
        <x-column grid="md:8">
            <x-card>
                <x-card-header :text="__('Reset Password')"/>

                <x-card-body>
                    <x-session-message/>

                    <x-form :action="route('password.email')">
                        <x-email-field name="email" :label="__('E-Mail Address')" grid="md:4,6" required autocomplete="email" autofocus/>

                        <x-row class="form-group mb-0">
                            <x-column grid="md:6" offset="md:4">
                                <x-button type="submit" variant="primary">{{ __('Send Password Reset Link') }}</x-button>
                            </x-column>
                        </x-row>
                    </x-form>
                </x-card-body>
            </x-card>
        </x-column>
    </x-row>
</x-container>
@stop
