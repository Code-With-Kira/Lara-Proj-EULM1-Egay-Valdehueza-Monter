# Contact Page

The Contact page is available at `/contact` and uses the named Laravel route `contact`.

## Integration

- `resources/views/contact.blade.php` extends `layouts.app`, which supplies the shared navigation and footer.
- `routes/web.php` maps `/contact` to the `contact` view.
- The view adds `public/css/contact.css` to the layout's styles stack and `public/js/contact.js` to its scripts stack. The shared layout renders both stacks.
- The hero background image is `public/images/hero-coast.jpg`.

These are static files under `public/`; Vite is not needed to load the contact-specific CSS or JavaScript.

## Form behavior

The form validates name, email, subject, and message in the browser. It displays field errors and a local confirmation after valid input. It is a demo only: it does not transmit or store messages, and no server-side submission endpoint is configured.

## Run and verify

From the project root:

```sh
composer run setup
php artisan serve
```

Open `http://127.0.0.1:8000/contact`. Run the focused integration test with:

```sh
php artisan test --filter=ContactPageTest
```
