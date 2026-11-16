@extends('layouts.app')

@section('title', 'Contact the project team')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <section class="page-hero contact-hero">
        <div class="shell page-hero-content">
            <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span>Say hello</p>
            <h1>Every good trip<br>starts with a <em>question.</em></h1>
            <p>Share a note with the project team or tell us what you would like to discover next.</p>
        </div>
        <span class="page-hero-label">GET IN TOUCH</span>
    </section>

    <section class="section contact-section">
        <div class="shell contact-layout">
            <div class="contact-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span>We'd love to hear from you</p>
                <h2>Let's start<br>a <em>conversation.</em></h2>
                <p>This is a front-end demonstration form for a student project. It checks the fields in your browser only; no message is sent or stored.</p>
                <div class="contact-detail">
                    <span class="detail-icon" aria-hidden="true">↗</span>
                    <div><h3>Project contact</h3><p>Group contact details will be added when confirmed.</p></div>
                </div>
                <div class="contact-detail">
                    <span class="detail-icon" aria-hidden="true">⌖</span>
                    <div><h3>Location</h3><p>No public address has been supplied for this student project.</p></div>
                </div>
                <div class="contact-notice"><span aria-hidden="true">✳</span><p>Need current travel or safety information? Please check relevant official and local sources before your trip.</p></div>
            </div>

            <div class="contact-form-card">
                <div class="form-heading"><p class="eyebrow"><span class="eyebrow-line"></span>Send a note</p><span class="form-demo-label">DEMO FORM</span></div>
                <p class="form-intro">All fields are required. The form will show a local confirmation when your entries are valid.</p>
                <form id="contact-form" method="dialog" novalidate>
                    <div class="form-field">
                        <label for="contact-name">Name</label>
                        <input id="contact-name" name="name" type="text" autocomplete="name" required aria-describedby="name-error">
                        <span class="field-error" id="name-error" aria-live="polite"></span>
                    </div>
                    <div class="form-field">
                        <label for="contact-email">Email</label>
                        <input id="contact-email" name="email" type="email" autocomplete="email" required aria-describedby="email-hint email-error">
                        <span class="field-hint" id="email-hint">Use an address in the format name@example.com.</span>
                        <span class="field-error" id="email-error" aria-live="polite"></span>
                    </div>
                    <div class="form-field">
                        <label for="contact-subject">Subject</label>
                        <input id="contact-subject" name="subject" type="text" required aria-describedby="subject-error">
                        <span class="field-error" id="subject-error" aria-live="polite"></span>
                    </div>
                    <div class="form-field">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" rows="5" required aria-describedby="message-error"></textarea>
                        <span class="field-error" id="message-error" aria-live="polite"></span>
                    </div>
                    <button class="button button-dark form-submit" type="submit">Check my message <span aria-hidden="true">↗</span></button>
                    <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
                    <p class="form-disclaimer">Demo only — nothing is transmitted or stored.</p>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
