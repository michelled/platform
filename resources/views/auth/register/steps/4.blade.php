<form class="stack" method="POST" action="{{ localized_route('register-store') }}" novalidate>
    @csrf

    <x-hearth-input id="locale" name="locale" type="hidden" value="{{ locale() ?: config('app.locale') }}" />

    <!-- Password -->
    <div class="field @error('password') field--error @enderror stack">
        <x-hearth-label for="password" :value="__('hearth::auth.label_password')" />
        <div class="field__hint" id="password-hint">
            <p>{{ __('For your security, please make sure your password has:') }}</p>
            <ul>
                <li>{{ __('8 characters or more') }}</li>
                <li>{{ __('At least 1 upper case letter') }}</li>
                <li>{{ __('At least 1 number') }}</li>
                <li>{{ __('At least 1 special character (!@#$%^&*()-)') }}</li>
            </ul>
        </div>
        <x-password-input name="password" autocomplete="new-password" hinted />
        <x-hearth-error for="password" />
    </div>

    <!-- Confirm Password -->
    <div class="field @error('password') field--error @enderror stack">
        <x-hearth-label for="password_confirmation" :value="__('hearth::auth.label_password_confirmation')" />
        <x-password-input name="password_confirmation" />
        <x-hearth-error for="password" />
    </div>

    <p class="repel">
        <a class="cta secondary" href="{{ localized_route('register', ['step' => 3]) }}">{{ __('Back') }}</a>

        <button>
            {{ __('Create account') }}
        </button>
    </p>
</form>
