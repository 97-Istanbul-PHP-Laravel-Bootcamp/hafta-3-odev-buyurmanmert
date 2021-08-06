<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      $count=1;
      for ($i=0; $i <6; $i++){
        $product=$faker->sentence(1);
        DB::table('products')->insert([
          'product_category_id'=>mt_rand(1, 7),
          'product_user_id'=>mt_rand(1, 4),
          'product_unicode'=>mt_rand(10,1000),
          'product_slug'=>Str::slug($product),
          'product_title'=>$product,
          'product_description'=>$faker->paragraph(1),
          'product_order'=>$count++,
          'product_status'=>$faker->randomElement(['a','p','t']),
          'product_prc'=>mt_rand(100, 5000),
          'product_cid'=>mt_rand(1, 3),
          'created_at'=>now(),
          'updated_at'=>now(),
        ]);
      }
    }
}
