<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
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
        $this->call([

            SliderSeeder::class,
            SlickSliderSeeder::class,
            SocialMediaSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
