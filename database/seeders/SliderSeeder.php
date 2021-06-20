<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
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
                'image' => 'uploads/sliders/slide_1.jpg',
                'visible' => true,
                'url' => '#',
                'title' => 'First slide label',
                'sub_title' => 'Some representative placeholder content for the first slide.',
                'description' => 'Lorem ipsum dolorequuntur s impedit tenetur eos illo maiores. Cupiditate rerum voluptatibus voluptate ullam eum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 2,
                'image' => 'uploads/sliders/slide_2.jpg',
                'url' => '#',
                'title' => 'Second slide label',
                'sub_title' => 'Some representative placeholder content for the first slide.',
                'description' => 'Lorem ipsum dolorequuntur s impedit tenetur eos illo maiores. Cupiditate rerum voluptatibus voluptate ullam eum.',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 3,
                'image' => 'uploads/sliders/slide_3.jpg',
                'url' => '#',
                'title' => 'Third slide label',
                'sub_title' => 'Some representative placeholder content for the first slide.',
                'description' => 'Lorem ipsum dolorequuntur s impedit tenetur eos illo maiores. Cupiditate rerum voluptatibus voluptate ullam eum.',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 3,
                'image' => 'uploads/sliders/slide_4.jpg',
                'url' => '#',
                'title' => 'Forth slide label',
                'sub_title' => 'Some representative placeholder content for the first slide.',
                'description' => 'Lorem ipsum dolorequuntur s impedit tenetur eos illo maiores. Cupiditate rerum voluptatibus voluptate ullam eum.',
                'visible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Slider::insert($rows);
    }

}
