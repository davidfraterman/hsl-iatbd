<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />
        <h2 class="formCard__title">Registreren</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Naam')" />

                <x-input class="formCard__textInput" id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div >
                <x-label for="email" :value="__('Email')" />

                <x-input class="formCard__textInput" id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div >
                <x-label for="password" :value="__('Wacthwoord')" />

                <x-input id="password" class="formCard__textInput"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div >
                <x-label for="password_confirmation" :value="__('Herhaal Wachtwoord')" />

                <x-input id="password_confirmation"  class="formCard__textInput" 
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div>
                <a class="formCard__secondaryAction" href="{{ route('login') }}">
                    {{ __('Inloggen?') }}
                </a>

                <x-button class="primaryButton">
                    {{ __('Registreren') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
