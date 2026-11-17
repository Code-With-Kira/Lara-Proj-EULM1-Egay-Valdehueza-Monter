@extends('layouts.app')

@section('title', 'About this project')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <div class="about-page">
        <section class="page-hero about-hero" style="background-image: url('{{ asset('images/hero-mountains.jpg') }}')">
            <div class="shell page-hero-content">
                <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> A student-developed guide</p>
                <h1>Made for the<br><em>love of the journey.</em></h1>
                <p>A small project with a big map: an inviting place to start learning about destinations, cultures, and responsible ways to explore the Philippines.</p>
            </div>
            <span class="page-hero-label">OUR STORY / 01</span>
        </section>

        <section class="section about-story" aria-labelledby="about-story-title">
            <div class="shell about-story-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span> Why we made this</p>
                <h2 id="about-story-title">A starting point,<br>not the <em>whole story.</em></h2>
                <p class="about-story-lead">Lakbay Pilipinas is a student-developed tourism information website inspired by the richness and variety of the Philippine archipelago.</p>
                <p class="about-story-summary">Its purpose is to bring destination ideas and thoughtful travel reminders together in one approachable place. This website is an educational project — it is not an official government tourism agency, a travel operator, or a booking service.</p>
                <div id="story-details" class="about-story-details" hidden>
                    <p>Use the pages as a beginning for your own research, and confirm practical details with current, local sources before traveling.</p>
                </div>
                <button class="about-read-more" type="button" aria-controls="story-details" aria-expanded="false" data-story-toggle>
                    <span data-story-toggle-label>Read more about the project</span>
                    <span class="about-read-more-icon" data-story-toggle-icon aria-hidden="true">+</span>
                </button>
            </div>
        </section>

        <section class="section about-values" aria-label="Our mission and vision">
            <div class="shell about-values-grid">
                <article class="about-value-card about-mission">
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> Our mission</p>
                    <h2>Inspired discovery<br>with care.</h2>
                    <p>Share welcoming, introductory information about Philippine destinations while encouraging respectful, informed, and locally considerate travel.</p>
                </article>
                <article class="about-value-card about-vision">
                    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> Our vision</p>
                    <h2>Curiosity that<br>connects.</h2>
                    <p>Help more people approach the Philippines with curiosity, appreciation for its diversity, and respect for the communities and ecosystems that make every place meaningful.</p>
                </article>
            </div>
        </section>

        <section class="section about-discover" aria-labelledby="about-discover-title">
            <div class="shell">
                <div class="about-section-intro">
                    <p class="eyebrow"><span class="eyebrow-line"></span> What you’ll find here</p>
                    <h2 id="about-discover-title">Small guide.<br><em>Wide horizons.</em></h2>
                    <p>Use this page as a beginning for your own research, and always confirm practical details before traveling.</p>
                </div>
                <div class="about-discover-grid">
                    <article class="about-discover-card">
                        <span class="about-card-number">01</span>
                        <h3>Places to explore</h3>
                        <p>Ideas spanning beaches, nature, heritage, and city life across the Philippines.</p>
                        <span class="about-card-mark" aria-hidden="true">↗</span>
                    </article>
                    <article class="about-discover-card">
                        <span class="about-card-number">02</span>
                        <h3>Ways to travel</h3>
                        <p>Gentle reminders to learn from local sources and consider your impact along the way.</p>
                        <span class="about-card-mark" aria-hidden="true">↗</span>
                    </article>
                    <article class="about-discover-card">
                        <span class="about-card-number">03</span>
                        <h3>A project in progress</h3>
                        <p>A class project shaped by its student contributors and improved as details are confirmed.</p>
                        <span class="about-card-mark" aria-hidden="true">✳</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="section about-team" aria-labelledby="about-team-title">
            <div class="shell">
                <div class="about-team-heading">
                    <div>
                        <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> The people behind the pages</p>
                        <h2 id="about-team-title">Meet the<br><em>project team.</em></h2>
                    </div>
                    <p>Meet the students behind Lakbay Pilipinas. Each member contributed to a different part of the project, from the shared layout and Home page to the About and Contact pages.</p>
                </div>
                <div class="about-team-grid">
                    @foreach (config('tourism.team', []) as $member)
                        <article class="about-team-card">
                            <div class="about-team-photo">
                                <img
                                    src="{{ asset('images/' . $member['image']) }}"
                                    alt="Portrait of {{ $member['name'] }}"
                                    loading="lazy"
                                    style="--image-position: {{ $member['image_position'] ?? 'center' }}; --image-scale: {{ $member['image_scale'] ?? 1 }};"
                                >
                            </div>
                            <div class="about-team-info">
                                <p class="about-team-role">{{ $member['card_role'] ?? $member['role'] }}</p>
                                <h3>{{ $member['name'] }}</h3>
                                <p>{{ $member['responsibility'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
