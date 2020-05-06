<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class UserTest extends TestCase
{
    use RefreshDatabase;


    public function test_an_user_id_is_recorded()
    {

        User::create([
            'username' => 'manolo',
            'name' => $this->faker->firstName()

        ]);

        $this->assertCount(1, User::all());
    }
}
