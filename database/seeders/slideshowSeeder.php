<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class slideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('slideshow')->insert([
            [
                'title' => 'Image 1',
                'url' => 'https://picsum.photos/seed/picsum/700/400',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Image 2',
                'url' => 'images/Dentist room.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Image 3',
                'url' => 'images/outside.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

        ]);
    }
}
