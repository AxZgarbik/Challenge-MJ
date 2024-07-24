<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <label class="label-logo">Course Market</label>
            <img src="/images/curses-removebg.png" alt="logo" style="width: 400px; height: 350px;">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                

                <x-input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="flex mt-4 flex-wrap items-center">
                

                <x-input id="password" class="block mt-1 w-11/12"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="current-password" />
                <a id="toggleVisibility" class="w-1/12 cursor-pointer pl-1">
                    <img id="visibilityIcon" src="/images/oculto.png" alt="ver" style="width: 30px; height: 30px;">
                </a>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script>
    document.getElementById('toggleVisibility').addEventListener('click', function() {
        const passwordInput = document.getElementById('password'); // Asegúrate de tener un input con id="password"
        const visibilityIcon = document.getElementById('visibilityIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            visibilityIcon.src = '/images/ver.png'; // Cambia a la imagen de oculto
        } else {
            passwordInput.type = 'password';
            visibilityIcon.src = '/images/oculto.png'; // Cambia de nuevo a la imagen de ver
        }
    });
</script>