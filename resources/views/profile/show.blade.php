<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">

	<!-- Selec2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets_belle/images/favicon.png') }}" />
	<!-- Plugins CSS -->
	<link rel="stylesheet" href="{{ asset('assets_belle/css/plugins.css') }}">
	<!-- Bootstap CSS -->
	<link rel="stylesheet" href="{{ asset('assets_belle/css/bootstrap.min.css') }}">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets_belle/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets_belle/css/responsive.css') }}">

	@livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="">

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{ url('/') }}" class="link-to-home"><img src="{{ asset('assets_belle/images/logo.svg') }}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">

							<div class="wrap-icon-section" style="width: 20%; margin-right: 45px;">
								<div class="site-cart">
								<a href="{{ url('/cart') }}" class="site-header__cart" title="Cart">
									<i class="icon anm anm-bag-l"></i>
									<span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
								</a>
								</div>
							</div>
							@if(Auth::user())
								<div class="wrap-icon-section topbar-menu right-menu" style="width: 30%;">
								@if(Auth::user()->image == null)
								<div class="mt-2" x-show="! photoPreview">
								<img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
							</div>
								@else
								<img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                 style="border: 1px solid #cccccc; border-radius: 5px; width: 39px; height: auto;float:left; margin-right: 7px;">
								@endif
								 	<a title="My Account" href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a>
									 
								</div>
								<div class="wrap-icon-section" style="width: 30%;">
									<a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
									<form id="logout-form" method="POST" action="{{ route('logout') }}">
										@csrf
									</form>
								</div> 
							@else
								<div class="wrap-icon-section" style="width: 30%;">
									<a href="{{ route('login') }}" class="link-direction btn">Login</a>
								</div>
								<div class="wrap-icon-section" style="width: 30%;">
									<a href="{{ route('register') }}" class="link-direction btn">Registrarse</a>
								</div>
							@endif

						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					    <!--Header-->
    <div class="header-wrap animated d-flex border-bottom">
    	<div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-2 col-sm-3 col-md-3 col-lg-8 offset-lg-2">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                    @livewire('header-menu-component')
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>

        	</div>
        </div>
    </div>
    <!--End Header-->
				</div>
			</div>
		</div>
    </header>

    <main id="main" class="main-site container">
    <!--Sidebar-->
    <div class="row pt-5" style="min-height: 80vh !important;">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
                <!--Categories-->
                <div class="sidebar_widget categories filter-widget">
                    <div class="widget-title"><h2>Perfil</h2></div>
                    <div class="widget-content">
                        <ul class="sidebar_categories">
                            <li class="level1">
                                <a href="{{ route('profile.show') }}" class="site-nav">Configuraci??n</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile-sell') }}" class="site-nav">Productos Vendidos</a>
                            </li>
                            <li class="level1">
                                <a href="{{ route('profile-buy') }}" class="site-nav">Productos Comprados</a>
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
                    <div class="mt-5 mb-25 sm:mt-0">
                        @livewire('profile.update-profile-information-form')
                    </div>

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-5 mb-25 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-jet-section-border />
                @endif

                <div class="mt-5 mb-25 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />

                    <div class="mt-5 mb-25 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
</main>



	<footer id="footer" class="footer-2">
        <div class="newsletter-section ">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>Subscribete para</span>Recibir novedades</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Correo Electronico" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribir</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
		<div class="coppy-right-box">
			<div class="container">
				<div class="coppy-right-item item-left">
					<p class="coppy-right-text">Copyright ?? 2021 Tecsup</p>
				</div>
				<div class="coppy-right-item item-right">
					<div class="wrap-nav horizontal-nav">
						<ul>
							<li class="menu-item"><a href="{{ url('/about-us') }}" class="link-term">Nosotros</a></li>
							<li class="menu-item"><a href="{{ url('/privacy-policy') }}" class="link-term">Politica de Privacidad</a></li>
							<li class="menu-item"><a href="{{ url('/terms-conditions') }}" class="link-term">Terminos y Condiciones</a></li>
							<li class="menu-item"><a href="{{ url('/return-policy') }}" class="link-term">Politica de Devoluci??n</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </footer>

	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>

	@livewireScripts

	<script src="{{ asset('assets_belle/js/vendor/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets_belle/js/vendor/modernizr-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets_belle/js/vendor/jquery.cookie.js') }}"></script>
	<script src="{{ asset('assets_belle/js/vendor/wow.min.js') }}"></script>
	<!-- Including Javascript -->
	<script src="{{ asset('assets_belle/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets_belle/js/plugins.js') }}"></script>
	<script src="{{ asset('assets_belle/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets_belle/js/lazysizes.js') }}"></script>
	<script src="{{ asset('assets_belle/js/main.js') }}"></script>
	<!-- Select 2 -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>
