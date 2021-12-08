{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Estoy de acuerdo  :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>Register</span></li>
				</ul>
			</div>
			<div>
				<div>							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item form-stl">
                                <x-jet-validation-errors />
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
              <img
                src="https://inifdudaipur.com/wp-content/uploads/2020/09/closet-cleaning.jpeg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('register') }}" name="frm-login" method="POST">
                @csrf
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; font-size:30px;">Crea una Cuenta</h5>
                                        
									<fieldset class="form-outline mb-4">
										<label for="frm-reg-lname">Nombre*</label>
										<input type="text" id="frm-reg-lname" name="name" placeholder="Indica tu nombre" :value="name" required autofocus autocomplete="name">
									</fieldset>
									<fieldset class="form-outline mb-4">
										<label for="frm-reg-email">Email*</label>
										<input type="email" id="frm-reg-email" name="email" placeholder="Email" :value="email" required>
									</fieldset>									
									<fieldset class="form-outline mb-4">
										<label for="frm-reg-pass">Contraseña *</label>
										<input type="password" id="frm-reg-pass" name="password" placeholder="******" required autocomplete="new-password">
									</fieldset>
									<fieldset class="form-outline mb-4">
										<label for="frm-reg-cfpass">Confirmar Contraseña *</label>
										<input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="******" required autocomplete="new-password">
									</fieldset>
									

                  <div class="pt-1 mb-4">
                    <input style="font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " type="submit" class="btn-dark btn-lg btn-block" value="Registrarse" name="register">
                  
                  <hr class="my-4">
                    <a class="btn-dark btn-lg btn-block" style="background-color: #dd4b39; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;  " href="{{ route('login.google')}}" role="button">
                      <i class="fa fa-google-plus"></i>&emsp;Regístrate con Google
                    </a>
                    <a class="btn-dark btn-lg btn-block" style="background-color: #3b5998; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " href="{{ route('login.facebook')}}" role="button">
                      <i class="fa fa-facebook-official"></i>&emsp;Regístrate con Facebook
                    </a>
                    <!-- <a class="btn-dark btn-lg btn-block" style="background-color: #737476; font-size:15px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px; " href="{{ route('login.github')}}"role="button">
                      <i class="fa fa-github"></i>&emsp;Regístrate con Github</a>
                      </div> -->
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