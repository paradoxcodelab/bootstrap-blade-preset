<x-bs-navbar bg="white" class="shadow-sm">
    <x-bs-container>
        <x-bs-navbar-brand :href="url('/')" :text="config('app.name', 'Laravel')"/>
        <x-bs-navbar-toggler href="#navbarCollapse" :aria-label="__('Toggle navigation')"/>

        <x-bs-navbar-collapse id="navbarCollapse">
            <x-bs-navbar-nav list class="ml-auto">
                @guest
                <x-bs-nav-item><x-bs-nav-link :href="route('login')" :text="__('Login')"/></x-bs-nav-item>
                <x-bs-nav-item><x-bs-nav-link :href="route('register')" :text="__('Register')"/></x-bs-nav-item>
                @else
                <x-bs-nav-item class="dropdown">
                    <x-bs-dropdown-toggle id="navbarDropdown" class="nav-link">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </x-bs-dropdown-toggle>

                    <x-bs-dropdown-menu right aria-labelledby="navbarDropdown">
                        <x-bs-dropdown-item href="javascript:void" onclick="$('#logout-form').submit();" :text="__('Logout')"/>

                        <x-bs-form id="logout-form" :action="route('logout')" class="d-none"/>
                    </x-bs-dropdown-menu>
                </x-bs-nav-item>
                @endguest
            </x-bs-navbar-nav>
        </x-bs-navbar-collapse>
    </x-bs-container>
</x-bs-navbar>
