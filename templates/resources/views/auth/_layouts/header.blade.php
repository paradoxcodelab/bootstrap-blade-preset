<x-navbar bg="white" class="shadow-sm">
    <x-container>
        <x-navbar-brand :href="url('/')" :text="config('app.name', 'Laravel')"/>
        <x-navbar-toggler href="#navbarCollapse" :aria-label="__('Toggle navigation')"/>

        <x-navbar-collapse id="navbarCollapse">
            <x-navbar-nav list class="ml-auto">
                @guest
                <x-nav-item><x-nav-link :href="route('login')" :text="__('Login')"/></x-nav-item>
                <x-nav-item><x-nav-link :href="route('register')" :text="__('Register')"/></x-nav-item>
                @else
                <x-nav-item class="dropdown">
                    <x-dropdown-toggle id="navbarDropdown" class="nav-link">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </x-dropdown-toggle>

                    <x-dropdown-menu right aria-labelledby="navbarDropdown">
                        <x-dropdown-item href="javascript:void" onclick="$('#logout-form').submit();" :text="__('Logout')"/>

                        <x-form id="logout-form" :action="route('logout')" class="d-none"/>
                    </x-dropdown-menu>
                </x-nav-item>
                @endguest
            </x-navbar-nav>
        </x-navbar-collapse>
    </x-container>
</x-navbar>
