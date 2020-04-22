<?php

namespace tests\Feature;

use Tests\TestCase;

class WelcomeViewTest extends TestCase
{
    public function test_user_can_see_welcome_view_ok(): void
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    public function test_user_can_see_welcome_view_failure(): void
    {
        $response = $this->get('/');
        $response->assertSuccessful()->assertStatus(200)->assertViewIs('home');


    }

    public function test_user_can_see_text()
    {
        $this->get('/')
            ->assertSeeText('Tweety')
            ->assertSeeText('Login')
            ->assertSeeText('Register');


    }

    public function test_user_can_see_text_failure()
    {
        $this->get('/')
            ->assertSeeText('Twety')
            ->assertSeeText('L0gin')
            ->assertSeeText('Regiter');
    }

    public function test_only_user_logged_can_see_tweets()
    {
        $this->get('/tweets')->assertRedirect('/login');
    }

}
