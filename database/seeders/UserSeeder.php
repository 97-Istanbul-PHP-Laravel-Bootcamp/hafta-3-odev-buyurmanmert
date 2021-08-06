<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Users; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        for ($i=0; $i <5; $i++){
          DB::table('users')->insert([
            'user_uname'=>$faker->userName(),
            'user_pass'=>$faker->password(),
            'user_mail'=>$faker->safeEmail(),
            'user_mpno'=>$faker->randomNumber(),
            'user_fname'=>$faker->firstName(),
            'user_lname'=>$faker->lastName(),
            'user_status'=>$faker->randomElement(['a','p','t']),
            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
        }
    }
}
