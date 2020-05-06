<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 40) as $index) {
            /** @noinspection DisconnectedForeachInstructionInspection */
            DB::table('follows')->insert([
                'user_id' => random_int(1, 30),
                'following_user_id' => $faker->unique()->numberBetween(1, 40)
            ]);
        }
    }
}


