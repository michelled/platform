<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Accessibility in Action') }}</title>

        <!-- Manifest -->
        <link rel="manifest" href="/manifest.webmanifest">

        <!-- Icons -->
        <link rel="icon" href="/favicon.ico">
        <link rel="icon" href="/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script>document.documentElement.className = document.documentElement.className.replace("no-js", "js");</script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('layouts.banner')

        <!-- Main Content -->
        <main>
            <article class="wrapper flow">
                <!-- Page Heading -->
                <header class="flow">
                    <h1>@yield('code'): @yield('title')</h1>
                </header>

                <!-- Page Content -->
                <div class="content flow">
                    <p>@yield('message')</p>
                    <p><a href="/" rel="home">{{ __('Return to home page') }}</a></p>
                </div>
            </article>
        </main>
    </body>
</html>
