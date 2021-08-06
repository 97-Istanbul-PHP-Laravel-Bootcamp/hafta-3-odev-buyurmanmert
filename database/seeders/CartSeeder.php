<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Cart; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        for ($i=0; $i <10; $i++){
          DB::table('carts')->insert([
            'cart_user_id'=>mt_rand(1, 5),
            'cart_product_id'=>mt_rand(1, 6),
            'cart_orid'=>$faker->randomNumber(),
            'cart_code'=>$faker->randomNumber(),
            'cart_prc'=>mt_rand(100, 5000),
            'cart_cid'=>mt_rand(1, 3),
            'cart_sale_date'=>$faker->date(),
            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
        }
    }
}
