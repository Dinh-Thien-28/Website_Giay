<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(UserTableSeeder::class);
       \App\Models\Product::factory(50)->create();
      \App\Models\Category::factory(15)->create();
    }
}
?>