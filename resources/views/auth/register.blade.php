<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />
        <h2 class="authCard__title">Registreren</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Naam')" />

                <x-input class="authCard__textInput" id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div >
                <x-label for="email" :value="__('Email')" />

                <x-input class="authCard__textInput" id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div >
                <x-label for="password" :value="__('Wacthwoord')" />

                <x-input id="password" class="authCard__textInput"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div >
                <x-label for="password_confirmation" :value="__('Herhaal Wachtwoord')" />

                <x-input id="password_confirmation"  class="authCard__textInput" 
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div>
                <a class="authCard__secondaryAction" href="{{ route('login') }}">
                    {{ __('Inloggen?') }}
                </a>

                <x-button class="primaryButton">
                    {{ __('Registreren') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
