<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <x-nav-link :icon="'home'" :href="route('dashboard')" :active="request()->routeIs('dashboard')" >
                Converter Moedas
            </x-nav-link>
        </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <x-nav-link :icon="'user'" :href="route('profile.edit')" :active="request()->routeIs('profile.edit')" >
                {{ __('Profile') }}
            </x-nav-link>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href={{ "route('logout')" }}
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    <span data-feather="log-out" class="align-text-bottom"></span>
                    {{ __('Log Out') }}</a>
            </form>
        </li>
    </ul>
</nav>