@extends('layouts.app')

@section('title', 'Discover the Philippines')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <section class="hero" aria-label="Featured destinations">
        <div class="hero-slides">
            <article class="hero-slide is-active" data-slide="0" aria-hidden="false">
                <img src="{{ asset('images/hero-island.jpg') }}" alt="Sunset light on waves reaching a quiet shore">
                <div class="hero-shade"></div>
                <div class="shell hero-copy">
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>More than a destination</p>
                    <h1>Find your own<br><em>island story.</em></h1>
                    <p class="hero-description">From salt-air mornings to evenings shared over good food, the Philippines
                        has a way of making every journey feel personal.</p>
                    <div class="hero-actions">
                        <a class="button button-light" href="#destinations">Explore destinations <span
                                aria-hidden="true">↘</span></a>
                        <span class="hero-note">A little inspiration for your next trip</span>
                    </div>
                </div>
                <span class="hero-index">01 <span>/</span> 03</span>
            </article>
            <article class="hero-slide" data-slide="1" aria-hidden="true">
                <img src="{{ asset('images/hero-coast.jpg') }}" alt="Blue water meeting a bright, sandy shoreline">
                <div class="hero-shade"></div>
                <div class="shell hero-copy">
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Take the scenic route</p>
                    <h1>Let the coast<br><em>set the pace.</em></h1>
                    <p class="hero-description">Slow down, look around, and discover the landscapes and local stories that
                        make each corner of the archipelago distinct.</p>
                    <div class="hero-actions">
                        <a class="button button-light" href="#experiences">Find inspiration <span
                                aria-hidden="true">↘</span></a>
                        <span class="hero-note">Thoughtful travel starts with curiosity</span>
                    </div>
                </div>
                <span class="hero-index">02 <span>/</span> 03</span>
            </article>
            <article class="hero-slide" data-slide="2" aria-hidden="true">
                <img src="{{ asset('images/hero-mountains.jpg') }}" alt="Mountain peaks rising beneath a wide sky">
                <div class="hero-shade"></div>
                <div class="shell hero-copy">
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Go beyond the shoreline</p>
                    <h1>Make room<br>for <em>wonder.</em></h1>
                    <p class="hero-description">A journey can lead to cool mountain air, old streets, lively markets, and
                        the kind of welcome you remember long after.</p>
                    <div class="hero-actions">
                        <a class="button button-light" href="{{ route('about') }}">Our point of view <span
                                aria-hidden="true">↗</span></a>
                        <span class="hero-note">Explore with care and an open mind</span>
                    </div>
                </div>
                <span class="hero-index">03 <span>/</span> 03</span>
            </article>
        </div>
        <div class="hero-controls shell" aria-label="Carousel controls">
            <button class="hero-arrow" type="button" data-carousel-prev aria-label="Show previous slide">←</button>
            <div class="hero-dots" role="group" aria-label="Choose a slide">
                <button type="button" class="hero-dot is-active" data-slide-to="0" aria-label="Show slide 1"
                    aria-pressed="true"></button>
                <button type="button" class="hero-dot" data-slide-to="1" aria-label="Show slide 2"
                    aria-pressed="false"></button>
                <button type="button" class="hero-dot" data-slide-to="2" aria-label="Show slide 3"
                    aria-pressed="false"></button>
            </div>
            <button class="hero-arrow" type="button" data-carousel-next aria-label="Show next slide">→</button>
            <span class="hero-control-label">Scroll to explore</span>
        </div>
    </section>

    <section class="intro-strip">
        <div class="shell intro-inner">
            <p class="eyebrow"><span class="eyebrow-line"></span>Islands, in every direction</p>
            <p>Travel inspiration for curious minds — from first-time visitors to lifelong island hoppers.</p>
            <span class="intro-stamp" aria-hidden="true">PH<br>✳</span>
        </div>
    </section>

    <section class="section destinations-section" id="destinations">
        <div class="shell">
            <div class="section-heading">
                <div>
                    <p class="eyebrow"><span class="eyebrow-line"></span>A few places to begin</p>
                    <h2>So many ways<br>to <em>feel away.</em></h2>
                </div>
                <p class="section-intro">Every island and region has its own rhythm. Here are a few well-known places to
                    spark your curiosity.</p>
            </div>
            <div class="destination-grid">
                @foreach (config('tourism.destinations') as $destination)
                    <article @class([
                        'destination-card',
                        'destination-card-tall' => $destination['layout'] === 'tall',
                        'destination-card-wide' => $destination['layout'] === 'wide',
                    ])>
                        <img src="{{ asset('images/' . $destination['image']) }}" alt="{{ $destination['alt'] }}">
                        <div class="destination-overlay"></div>
                        <span class="destination-number">{{ $destination['number'] }}</span>
                        <div class="destination-copy">
                            <p>{{ $destination['category'] }}</p>
                            <h3>{{ $destination['name'] }}</h3>
                            <span>{{ $destination['description'] }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
            <p class="image-note">Destination-specific photos are credited in the README. All other destination photography
                is illustrative.</p>
        </div>
    </section>

    <section class="experience-section" id="experiences">
        <div class="shell experience-layout">
            <div class="experience-copy">
                <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Beyond the postcard</p>
                <h2>Take the long<br>way <em>around.</em></h2>
                <p>There is more to a trip than the view. Make time for local food, neighborhood walks, quiet mornings, and
                    the people who make a place feel like itself.</p>
                <a class="text-link text-link-light" href="{{ route('about') }}">The ideas behind this guide <span
                        aria-hidden="true">↗</span></a>
            </div>
            <div class="experience-list">
                <article class="experience-item">
                    <span class="experience-number">01</span>
                    <div>
                        <h3>Aqua Planet</h3>
                        <p>A water-park outing in Pampanga. Check current opening details, access, and visitor guidance with
                            the venue before planning a visit.</p>
                    </div>
                    <span class="experience-icon" aria-hidden="true">↗</span>
                </article>
                <article class="experience-item">
                    <span class="experience-number">02</span>
                    <div>
                        <h3>Montemaria, Batangas</h3>
                        <p>A coastal pilgrimage destination. Confirm current access, visitor guidance, and any local
                            considerations before going.</p>
                    </div>
                    <span class="experience-icon" aria-hidden="true">↗</span>
                </article>
                <article class="experience-item">
                    <span class="experience-number">03</span>
                    <div>
                        <h3>Dahilayan Adventure Park</h3>
                        <p>Explore outdoor activities at your own pace; check current operator information, safety
                            requirements, and weather conditions first.</p>
                    </div>
                    <span class="experience-icon" aria-hidden="true">↗</span>
                </article>
                <article class="experience-item">
                    <span class="experience-number">04</span>
                    <div>
                        <h3>Mount Pinatubo</h3>
                        <p>Plan any visit with current local guidance, access information, and advice from authorized
                            operators.</p>
                    </div>
                    <span class="experience-icon" aria-hidden="true">↗</span>
                </article>
            </div>
        </div>
    </section>

    <section class="section travel-notes-section">
        <div class="shell travel-notes-layout">
            <div class="travel-notes-image">
                <img src="{{ asset('images/travel-notes.jpg') }}" alt="A forest cabin in a mountain landscape">
                <span class="image-caption">A guide, not a booking service</span>
            </div>
            <div class="travel-notes-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span>Good to keep in mind</p>
                <h2>Travel gently.<br><em>Stay curious.</em></h2>
                <p>Conditions, customs, and access can vary from one destination to another. Check current local guidance
                    before you go, choose responsible operators, and leave the places you visit as you found them.</p>
                <div class="note-points">
                    <p><span>01</span> Ask before photographing people or private places.</p>
                    <p><span>02</span> Follow local rules around wildlife and natural areas.</p>
                    <p><span>03</span> Support locally owned businesses where you can.</p>
                </div>
                <a class="text-link" href="{{ route('about') }}">How we approach this project <span
                        aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>

    <section class="closing-banner">
        <div class="shell closing-inner">
            <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Your next story starts somewhere</p>
            <h2>What will you<br><em>discover?</em></h2>
            <a class="button button-light" href="{{ route('contact') }}">Get in touch <span
                    aria-hidden="true">↗</span></a>
        </div>
        <div class="closing-orbit" aria-hidden="true">L</div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
