<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for($i = 0 ; $i < 150 ; $i++){
            $data = [
                'name'=>$faker->name,
                'cate_id'=>$faker->randomNumber(1,15),
                'image'=>$faker->image,
                'price'=>$faker->rand(1,10),
                'quantity'=>$faker->unique()->ean8,
            ];
            DB::table('products')->insert($data);
        }
    }
}
