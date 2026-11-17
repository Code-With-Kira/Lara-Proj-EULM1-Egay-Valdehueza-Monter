# Lakbay Pilipinas — About Page 🌿
### The Story and Team Behind the Website

## Overview

The About page introduces Lakbay Pilipinas, explains the purpose of the student project, and presents the team behind the website.

It uses the shared Laravel Blade layout so the navigation, footer, and common elements stay consistent with the Home and Contact pages. The page combines project information, mission and vision statements, discovery cards, team profiles, and links back to the destinations.

## Purpose

The About page gives visitors context for the tourism guide and the people who created it. It describes the site as an educational project and encourages visitors to research destinations carefully and travel with consideration for local communities and the environment.

## Main Features

### 1. Shared Navigation

The shared application layout provides navigation between the Home, About, and Contact pages. The About page does not maintain a separate navigation bar.

### 2. About Hero Section

The hero introduces the student-developed guide with a short headline and description. Its background image is configured in the About page stylesheet.

### 3. Project Story and Read More

The story section explains why the site was created and clarifies that it is an educational project, not a government tourism agency, travel operator, or booking service.

The Read More button expands additional travel context. Its JavaScript updates the button label and accessibility state as the content is shown or hidden.

### 4. Mission and Vision

Two cards describe the project's goal of encouraging discovery with care and its vision of helping people approach the Philippines with curiosity and respect.

### 5. What Visitors Will Find

Three discovery cards introduce destination ideas, responsible travel reminders, and the project's ongoing development.

### 6. Project Team

Team cards show each member's role, name, responsibility, and photo. The member records are stored in `config/tourism.php`; photos are stored in `public/images/`.

The optional `image_position` and `image_scale` values in a team record adjust how that member's photo is cropped and sized in its card.

### 7. Call to Action

The final section links visitors to the destination cards on the Home page.

### 8. Responsive Design

The About stylesheet adjusts the story, mission and vision, discovery cards, and team cards for smaller screens.

## Technologies Used

| Technology | Purpose |
|---|---|
| Laravel | Web application framework |
| PHP | Server-side programming and configuration |
| Blade | About page template |
| HTML5 | Page structure and content |
| CSS3 | Layout and visual presentation |
| JavaScript | Read More / Read Less interaction |

## File Organization

### Blade Templates

**`resources/views/about.blade.php`**

Contains the About page sections and team-card markup. It extends the shared application layout and loads the page-specific stylesheet and script.

**`resources/views/layouts/app.blade.php`**

Provides the common website structure, including navigation, footer, and the content area where the About page is displayed.

### CSS Files

**`public/css/about.css`**

Contains the About page's hero background, story, mission and vision, discovery cards, team cards, image cropping, and responsive styles.

**`public/css/app.css`**

Contains shared styles such as typography, colors, navigation, buttons, and common layout rules.

### JavaScript Files

**`public/js/about.js`**

Controls the Read More / Read Less interaction and keeps the button's `aria-expanded` state synchronized with the extra content.

**`public/js/app.js`**

Contains shared JavaScript functionality, including the mobile navigation.

### Team Configuration and Images

**`config/tourism.php`**

Contains the team names, roles, responsibilities, image filenames, and optional photo crop settings.

**`public/images/`**

Stores the About hero background and team photos used by the page.

### Routes

**`routes/web.php`**

Defines the About page route and connects its URL to the Blade view.

## About Page Route

| Property | Value |
|---|---|
| Page | About |
| URL | `/about` |
| Route Name | `about` |
| View | `resources/views/about.blade.php` |

## Image Assets

About page images are stored in `public/images/`. Team image filenames are set in the `team` entries in `config/tourism.php` and rendered with Laravel's `asset()` helper.

Example:

```php
'image' => 'laurence.jpg',
'image_position' => 'center 5%',
'image_scale' => 1.0,
```

`image_position` and `image_scale` are optional. Use `image_position` to adjust which part of a photo appears in the fixed card frame, and `image_scale` to zoom the photo in or out.

## Shared Blade Layout

The About page extends the shared layout and defines its page title and content:

```blade
@extends('layouts.app')

@section('title', 'About this project')

@section('content')
    <!-- About page content -->
@endsection
```

Its page-specific CSS and JavaScript are loaded through Blade stacks:

```blade
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
```

## Running the About Page

From the root directory of the Laravel project, run:

```sh
composer install
php artisan config:clear
php artisan serve
```

Open the page in a browser:

```text
http://127.0.0.1:8000/about
```

## Development Notes

The About page is one part of a multi-page Laravel application. Its shared layout and navigation are designed to work with the Home and Contact pages.

Update team information in `config/tourism.php` and place corresponding photos in `public/images/`. Preserve the Blade directives, image filenames, and accessibility attributes when editing the page.

---

## Lakbay Pilipinas 🇵🇭

***Discover. Explore. Experience the Philippines.***
