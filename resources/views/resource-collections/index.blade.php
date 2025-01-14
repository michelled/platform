<x-app-wide-layout>
    <x-slot name="title">{{ __('Resource hub') }}</x-slot>
    <x-slot name="header">
        <h1 itemprop="name">{{ __('Resource hub') }}</h1>
        <p class="subtitle">
            {{ __('Find learning materials, best practices, and variety of tools to help you throughout the consultation process.') }}
        </p>
    </x-slot>

    <div class="stack">
        <h2>{{ __('Search') }}</h2>
        <form class="search" action="" method="post">
            @csrf
            <label class="visually-hidden" for="search">{{ __('Search') }}</label>
            <input id="search" type="search" />
            <button type="submit">{{ __('Search') }}</button>
        </form>
        <h2>{{ __('Browse all resources') }}</h2>
        <p>{{ __('Explore our entire resource hub.') }}</p>
        <p><a href="{{ localized_route('resources.index') }}">{{ __('Browse all resources') }}</a></p>
    </div>
    <div class="stack">
        <h2>{{ __('Resource collections') }}</h2>
        @if ($resourceCollections->count() > 0)
            <div class="stack cards cards--collections">
                @foreach ($resourceCollections as $resourceCollection)
                    <div class="box card card--collection stack">
                        <h3 id="{{ Str::slug($resourceCollection->title) }}">{{ $resourceCollection->title }}</h3>
                        <p>{{ $resourceCollection->description }}</p>
                        <p class="actions"><a class="button"
                                href="{{ localized_route('resource-collections.show', $resourceCollection) }}"
                                aria-describedby="{{ Str::slug($resourceCollection->title) }}">{{ __('Visit resources') }}</a>
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p>{{ __('resource-collection.none_found') }}</p>
        @endif
    </div>
</x-app-wide-layout>
