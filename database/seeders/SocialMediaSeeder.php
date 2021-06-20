<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'order_no' => 1,
                'icon' => 'uploads/socialMedia/facebook.png',
                'link' => 'https://www.facebook.com/',
                'title' => 'facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 2,
                'icon' => 'uploads/socialMedia/instagram.png',
                'link' => 'https://www.instagram.com/',
                'title' => 'instagram',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 3,
                'icon' => 'uploads/socialMedia/twitter.png',
                'link' => 'https://www.twitter.com/',
                'title' => 'twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 4,
                'icon' => 'uploads/socialMedia/whatsapp.png',
                'link' => 'https://www.whatsapp.com/',
                'title' => 'whatsapp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        SocialMedia::insert($rows);
    }
}
