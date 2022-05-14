<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 1, // 20 days
                'per_page_price'     => 8
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 2, // 15 days
                'per_page_price'     => 10
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 3, // 10 days
                'per_page_price'     => 12
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 4, // 8 days
                'per_page_price'     => 14
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 5, // 7 days
                'per_page_price'     => 15
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 16
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 17
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 18
            ],
            [
                'academic_level_id'  => 1, // Undergraduate
                'deadline_id'        => 9, // 2 days
                'per_page_price'     => 19
            ],

            // Master's
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 1, // 20 days
                'per_page_price'     => 10
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 2, // 15 days
                'per_page_price'     => 12
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 3, // 10 days
                'per_page_price'     => 14
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 4, // 8 days
                'per_page_price'     => 16
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 5, // 7 days
                'per_page_price'     => 18
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 19
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 20
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 21
            ],
            [
                'academic_level_id'  => 2, // Master's
                'deadline_id'        => 9, // 2 days
                'per_page_price'     => 22
            ],

            // PhD
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 1, // 20 days
                'per_page_price'     => 11
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 2, // 15 days
                'per_page_price'     => 13
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 3, // 10 days
                'per_page_price'     => 15
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 4, // 8 days
                'per_page_price'     => 17
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 5, // 7 days
                'per_page_price'     => 19
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 20
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 21
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 22
            ],
            [
                'academic_level_id'  => 3, // PhD
                'deadline_id'        => 9, // 2 days
                'per_page_price'     => 23
            ],

        ]);
    }
}
