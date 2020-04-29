<?php

namespace Tests\Unit;

use App\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class TweetsTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_tweet()
    {

        Tweet::create([
            'user_id' => 1,
            'body' => 'Peregrinatione rare ducunt ad domesticus hibrida.'
        ]);
        $this->assertCount(1, Tweet::all());
    }
}
