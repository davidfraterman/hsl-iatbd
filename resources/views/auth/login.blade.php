<x-guest-layout>
    <x-auth-card>
        
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="" :errors="$errors" />
        <h2 class="formCard__title">Inloggen</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="formCard__inputGroup">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="formCard__textInput" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="formCard__inputGroup">
                <x-label for="password" :value="__('Wachtwoord')" />

                <x-input id="password" class="formCard__textInput"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div >
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="">{{ __('Ingelogd blijven') }}</span>
                </label>
            </div>

            <div >
                <a class="formCard__secondaryAction" href="{{ route('register') }}">
                    {{ __('Registreren?') }}
                </a>

                <x-button class="primaryButton">
                    {{ __('Inloggen') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
