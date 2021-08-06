<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      $categories=['Elektronik','Moda','Ev, Yaşam, Kırtasiye, Ofis','Kozmetik, Kişisel Bakım','Spor, Outdoor','Süpermarket, Petshop','Kitap, Müzik, Film, Hobi'];
      for ($i=0; $i <1; $i++){
          foreach ($categories as $category) {
          DB::table('categories')->insert([
            'category_title'=>$category,
            'category_description'=>$faker->paragraph(1),
            'category_slug'=>Str::slug($category),
            'category_status'=>$faker->randomElement(['a','p','t']),
            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
        }
      }
    }
}
