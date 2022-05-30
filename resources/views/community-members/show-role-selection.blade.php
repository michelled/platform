<x-app-wide-layout>
    <x-slot name="title">{{ __('Welcome to the Accessibility Exchange') }}</x-slot>
    <x-slot name="header">
        <h1>
            {{ __('Welcome to') }}<br />
            {{ __('The Accessibility Exchange') }}
        </h1>

        <h2>{{ __('What would you like to do on this website?') }}</h2>
    </x-slot>

    <p>{{ __('You can always change this later.') }} <a href="{{ localized_route('about.for-community-members') }}">{{ __('Learn more about these roles') }}</a></p>

    <form class="stack" action="{{ localized_route('community-members.save-role') }}" method="post" novalidate>
        <fieldset class="field @error('roles') field--error @enderror">
            <x-hearth-checkboxes name="roles" :options="$roles" :checked="old('roles', [])" />
            <x-hearth-error for="roles" />
        </fieldset>

        <button>{{ __('Continue') }}</button>

        @method('put')
        @csrf
    </form>
</x-app-wide-layout>