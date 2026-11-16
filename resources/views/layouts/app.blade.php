<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f8f6f0">
    <meta name="description"
        content="A student-developed guide to Philippine destinations, culture, and thoughtful travel.">
    <title>@yield('title', 'Philippine Tourism') — Lakbay Pilipinas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Lakbay Pilipinas home">
                <span class="brand-mark" aria-hidden="true">L</span>
                <span class="brand-name">lakbay<span>pilipinas</span></span>
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span></span><span></span>
            </button>
            <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])
                    @if (request()->routeIs('home')) aria-current="page" @endif>Home</a>
                <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])
                    @if (request()->routeIs('about')) aria-current="page" @endif>About</a>
                <a href="{{ route('contact') }}" @class(['active' => request()->routeIs('contact')])
                    @if (request()->routeIs('contact')) aria-current="page" @endif>Contact</a>
                <a class="nav-cta" href="{{ route('contact') }}">Plan a conversation <span
                        aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="shell footer-main">
            <div class="footer-brand">
                <a class="brand brand-light" href="{{ route('home') }}">
                    <span class="brand-mark" aria-hidden="true">L</span>
                    <span class="brand-name">lakbay<span>pilipinas</span></span>
                </a>
                <p>A student-built starting point for exploring the many places, stories, and flavors of the
                    Philippines.</p>
            </div>
            <div class="footer-links">
                <h2>Explore</h2>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About this project</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="footer-team">
                <h2>Project team</h2>
                @foreach (config('tourism.team') as $member)
                    <p>{{ $member['role'] }} — <span class="placeholder">{{ $member['name'] }}</span></p>
                @endforeach
            </div>
        </div>
        <div class="shell footer-bottom">
            <span>Student-developed project for ITE 110-EULM1 · Not an official government website</span>
            <span>Made for curious, considerate travelers.</span>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
</body>

</html>
