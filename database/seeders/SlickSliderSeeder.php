<?php

namespace Database\Seeders;

use App\Models\SlickSlider;
use Illuminate\Database\Seeder;

class SlickSliderSeeder extends Seeder
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
                'title' => 'First slide label',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis culpa ex. Fugiat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 2,
                'image' => 'uploads/sliders/slide_2.jpg',
                'title' => 'Second slide label',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis culpa ex. Fugiat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 3,
                'image' => 'uploads/sliders/slide_3.jpg',
                'title' => 'Third slide label',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis culpa ex. Fugiat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 4,
                'image' => 'uploads/sliders/slide_4.jpg',
                'title' => 'Forth slide label',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis culpa ex. Fugiat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_no' => 5,
                'image' => 'uploads/sliders/slide_1.jpg',
                'title' => 'Fifth slide label',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adim deserunt, reprehenderit debitis harum laboriosam fuga cumque aliquid expedita nesciunt minima et nulla natus recusandae veniam, tenetur sequi laudantium quis culpa ex. Fugiat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        SlickSlider::insert($rows);
    }
}
