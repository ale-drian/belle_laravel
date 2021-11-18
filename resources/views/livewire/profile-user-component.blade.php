<main id="main" class="main-site container">
    <!--Sidebar-->
    <div class="row pt-5">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
                <!--Categories-->
                <div class="sidebar_widget categories filter-widget">
                    <div class="widget-title"><h2>Perfil</h2></div>
                    <div class="widget-content">
                        <ul class="sidebar_categories">
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Configuración</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile-sell') }}" class="site-nav">Productos Vendidos</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile-buy') }}" class="site-nav">Productos Comprados</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile') }}" class="site-nav">Carrito</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sidebar-->
        <!--Main Content-->
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col shop-grid-5">
            <div>
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-jet-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
</main>
