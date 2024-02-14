<x-guest-layout>
    <x-auth-card>

        <x-slot name="logo"><br><br><br><br>
        <!--  
        <img class='mb-4' src='https://aqualizar.com.br/adm/public/assets_caixa/images/logo-dark.png' alt=''
                width='300'>-->
        </x-slot>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <body style="text-align: center;">
            <br>

            <h1 class='h3 mb-12 font-weight-normal'>Administrador</h1>
            <br>
            <form method="POST" action="{{ route('login') }}">


                @csrf
                <label for="email">E-mail
                    <input id="email" class="form-control" type="email" name="email" required autofocus />
                    <label for="password" value="">Password
                        <input id="password" class="form-control" type="password" name="password"
                            autocomplete="current-password" required />
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label><br>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif <br><br>

                        <div class="form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        </div>
                        <br>
                        <x-button class="md-12">
                            {{ __('Log in') }}
                        </x-button>

            </form>

        </body>
    </x-auth-card>
</x-guest-layout>
</html>