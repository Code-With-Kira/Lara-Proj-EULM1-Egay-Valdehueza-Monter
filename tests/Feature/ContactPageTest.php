<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_contact_page_loads_with_its_page_assets(): void
    {
        $response = $this->get(route('contact'));

        $response->assertOk()
            ->assertSee('href="' . asset('css/contact.css') . '"', false)
            ->assertSee('src="' . asset('js/contact.js') . '"', false)
            ->assertSee('id="contact-form"', false);
    }
}
