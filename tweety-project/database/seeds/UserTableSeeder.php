<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        //$number_of_users = random_int(2, 10);
        factory(User::class, 20)->create();

        /*
        //Generamos un array con los ids de los usuarios
        $random_number_array = range(1, $number_of_users);
        shuffle($random_number_array);
        $random_number_array = array_slice($random_number_array, 1, $number_of_users);
        $arrayValues = array_values($random_number_array);
        //recorrer el array con foreach y rellenar la tabla de forma random
        foreach ($arrayValues as $value) {
            $user = User::find(random_int(1, $number_of_users));
            $follower_user = User::find($value);
            if ($user !== $follower_user) {
                $user->follow($follower_user);
            } elseif($user===$follower_user) {
                $user->follow( $number_of_users+random_int(1, $number_of_users));
            }
        }*/


    }

}
