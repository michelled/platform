<form class="stack" method="POST" action="{{ localized_route('register-context') }}" novalidate>
    <fieldset class="field @error('context') field--error @enderror stack">
        <legend>{{ __('Now it’s time to assign a role for this Accessibility Exchange account.') }}</legend>
        <x-hearth-hint for="context">{{ __('If more than one role applies to your work here on The Accessibility Exchange then you have the option to register additional accounts. ') }}</x-hearth-hint>
        <x-expander :summary="__('Learn more')" level="3">
            <p>{{ __('The way it works is that each account has just one role associated with it. So, if you are a Deaf person who would like to consult, and you are also the contact for an organization that serves Deaf people, we recommend that you create two separate accounts, one as an individual, and another as a member of your organization. That way, each of your two roles will have its own account, and we can be sure to send you the right information for each role.')}}</p>
        </x-expander>

        <x-hearth-radio-buttons name="context" :options="[
            [
                'value' => 'individual',
                'label' => __('Individual'),
                'hint' => __('I have lived experience of being disabled or Deaf, and I want to work on accessibility projects.
I am a family member or supporter of a person who is disabled or Deaf, and I want to share my experience on accessibility and barriers.
I have experience as an accessibility consultant and want to assist regulated organizations in designing and conducting accessibility projects.
I want to assist in outreach to disability and Deaf communities so they can participate in accessibility projects.
'),
            ],
            [
                'value' => 'organization',
                'label' => __('Community Organization'),
                'hint' => __('I am a part of a community organization that represents or serves the disability community, the Deaf community. Or, I am a part of a civil society.'),
            ],
            [
                'value' => 'regulated-organization',
                'label' => __('Regulated Organizations: Business, Federal Government and Public Sector Organizations'),
                'hint' => __('I work for a business, the federal government or a public sector organization regulated under the Accessible Canada Act.'),
            ],
            [
                'value' => 'regulated-organization-employee',
                'label' => __('Individual Seeking Training'),
                'hint' => __('I am an employee seeking training assigned by my organization or business.'),
            ]
        ]" :checked="old('context', session('context')) ?? false" hinted />
        <x-hearth-error for="context" />
    </fieldset>

    <p class="repel">
        <a class="cta secondary" href="{{ localized_route('register', ['step' => 1]) }}">{{ __('Back') }}</a>

        <button>
            {{ __('Next') }}
        </button>
    </p>
    @csrf
</form>
