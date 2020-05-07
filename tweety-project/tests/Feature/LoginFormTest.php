<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LoginFormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_display_login_form(): void
    {
        $response=$this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_login_validation_error(): void
    {

       $response=$this->withSession(['manolo@manolo.com'=>'12345678'])->get('/tweets');


        $response->assertStatus(200,$this->getStatus());
    }

}
