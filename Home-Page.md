# Lakbay Pilipinas — Home Page 🏝️
### The Main Landing Page of the Website

## Overview

The Home page is the main entry point of Lakbay Pilipinas. It is designed to welcome visitors and introduce them to the website's tourism theme through destination highlights, scenic imagery, and interactive content.

As the first page visitors encounter, it provides a quick introduction to what Lakbay Pilipinas offers and encourages them to explore the different destinations featured on the website.

The page is built using Laravel Blade, HTML, CSS, and JavaScript. It follows the application's shared layout, allowing the navigation and common website elements to remain consistent with the other pages.

## Purpose

The Home page aims to create a welcoming first impression while presenting Philippine destinations in a simple and visually appealing way.

Instead of overwhelming visitors with too much information at once, the content is arranged into sections that make the website easy to understand and navigate.

Its design combines tourism-related images, descriptive content, and interactive elements to make browsing more engaging.

## Main Features

### 1. Navigation Bar

The navigation bar provides access to the main sections of Lakbay Pilipinas.

It allows visitors to move between the Home, About, and Contact pages while maintaining a consistent browsing experience.

### 2. Hero Section

The hero section introduces the website through tourism-inspired imagery and a short description of its theme.

It establishes the visual identity of Lakbay Pilipinas and gives visitors an idea of what the website is about.

### 3. Featured Philippine Destinations

The Home page presents selected destinations from different parts of the Philippines.

The destinations are displayed through image-based cards that help visitors recognize and explore the featured locations.

Some of the destinations represented in the website include:

- Bohol
- Boracay
- Cebu
- Davao
- Manila
- Palawan
- Vigan

### 4. Interactive Image Carousel

The Home page includes an interactive carousel that allows visitors to browse featured visual content.

This functionality is implemented using JavaScript and provides an additional layer of interaction beyond simply viewing static page content.

### 5. Shared Footer

The page uses the application's common footer to maintain a consistent structure across the website.

It complements the navigation and provides shared information at the bottom of the page.

### 6. Responsive Design

The Home page uses CSS to organize its content, images, and destination cards.

Its layout is designed to adapt to different screen sizes, helping visitors access the website on different devices.

---

## Technologies Used

| Technology | Purpose |
|---|---|
| Laravel 13 | Web application framework |
| PHP | Server-side programming |
| Blade | Home page template |
| HTML5 | Page structure and content |
| CSS3 | Layout and visual presentation |
| JavaScript | Interactive carousel functionality |

## File Organization

The Home page uses separate files for its template, styling, and JavaScript functionality.

### Blade Templates

**`resources/views/home.blade.php`**

Contains the Home page's main content and sections. It extends the shared application layout through Laravel Blade.

**`resources/views/layouts/app.blade.php`**

Provides the common website structure, including navigation, footer, and the content area where the Home page is displayed.

### CSS Files

**`public/css/app.css`**

Contains shared styles used throughout the website, helping maintain a consistent visual presentation.

**`public/css/home.css`**

Contains the styling specific to the Home page, including its sections, destination cards, and visual layout.

### JavaScript Files

**`public/js/app.js`**

Contains shared JavaScript functionality used by the website.

**`public/js/home.js`**

Contains the JavaScript functionality specific to the Home page, including the interactive image carousel.

### Tourism Configuration

**`config/tourism.php`**

Contains tourism-related configuration data used by the application to provide content for its website sections.

### Routes

**`routes/web.php`**

Defines the Home page route and connects its URL to the corresponding Blade view.

---

## Home Page Route

| Property | Value |
|---|---|
| Page | Home |
| URL | `/` |
| Route Name | `home` |
| View | `resources/views/home.blade.php` |

## Image Assets

The Home page uses local image assets stored in:

```text
public/images/
```

These include destination photographs and tourism-related visuals used throughout the page.

Keeping the images inside the project's public directory allows the application to reference them through Laravel's `asset()` helper.

Example:

```php
<img src="{{ asset('images/destination-bohol.jpg') }}"
     alt="Bohol destination">
```

## Shared Blade Layout

The Home page extends the shared application layout instead of maintaining a separate HTML structure.

Example:

```php
@extends('layouts.app')

@section('content')

    <!-- Home page content -->

@endsection
```

Its page-specific CSS and JavaScript are loaded through Blade stacks:

```php
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
```

This approach keeps the Home page organized and allows the shared layout to handle common elements.

## Running the Home Page

From the root directory of the Laravel project, run:

```bash
composer install
php artisan config:clear
php artisan serve
```

Open the website in your browser:

```text
http://127.0.0.1:8000
```

The Home page is displayed automatically when visitors access the root URL.

## Development Notes

The Home page is part of a larger multi-page Laravel application. Its shared layout and navigation are designed to work with the About and Contact pages.

Its template, styles, and scripts are kept in separate files to make the code easier to read, maintain, and update.

The destination content and images are organized so that the page can present tourism information without requiring database operations in its current implementation.

---

## Lakbay Pilipinas 🇵🇭

**Discover. Explore. Experience the Philippines.**
