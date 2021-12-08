{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
                
            
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <main id="main" class="main-site left-sidebar">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/')}}" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div>
				<div>
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
                                <x-jet-validation-errors/>
  <section class="vh-100" style="background-image:url('https://i.ibb.co/XjbgmVH/bg-login.png')">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; font-size:30px;">Inicia Sesión</h5>
                  <fieldset class="form-outline mb-4">
										<label for="frm-login-uname">Email:</label>
										<input type="email" id="frm-login-uname" name="email" placeholder="Escriba su email" :value="old('email')" required autofocus>
									</fieldset>
									<fieldset class="form-outline mb-4">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
									</fieldset>
									
									<fieldset class="form-outline mb-4">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Recordar</span>
										</label>
										<strong><a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">¿Olvidaste tu contraseña?</a></strong>
									</fieldset>

                  <div class="pt-1 mb-4">
                    <input style="font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " type="submit" class="btn-dark btn-lg btn-block" value="Login" name="submit">
                  
                  <hr class="my-4">
                    <a class="btn-dark btn-lg btn-block" style="background-color: #dd4b39; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;  " href="{{ route('login.google')}}" role="button">
                      <i class="fa fa-google-plus"></i>&emsp;Iniciar Sesión con Google
                    </a>
                    <a class="btn-dark btn-lg btn-block" style="background-color: #3b5998; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " href="{{ route('login.facebook')}}" role="button">
                      <i class="fa fa-facebook-official"></i>&emsp;Iniciar Sesión con Facebook
                    </a>
                    <!-- <a class="btn-dark btn-lg btn-block" style="background-color: #737476; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " href="{{ route('login.github')}}"role="button">
                      <i class="fa fa-github"></i>&emsp;Iniciar Sesión con Github</a> -->
                      </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                                
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
</x-guest-layout>  