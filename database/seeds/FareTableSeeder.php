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
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 1, // 20
                'per_page_price'     => 30
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 2, // 15
                'per_page_price'     => 35
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 3, // 10
                'per_page_price'     => 45
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 4, // 7
                'per_page_price'     => 50
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 5, // 6
                'per_page_price'     => 55
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 60
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 65
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 9, // 48 hours
                'per_page_price'     => 95
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 10, // 24 hours
                'per_page_price'     => 105
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 11, // 12 hours
                'per_page_price'     => 145
             ],
             [
                'academic_level_id'  => 1, // High school
                'deadline_id'        => 12, // 6 hours
                'per_page_price'     => 165
             ],

             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 1, // 20
                'per_page_price'     => 40
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 2, // 15
                'per_page_price'     => 45
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 3, // 10
                'per_page_price'     => 55
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 4, // 7
                'per_page_price'     => 60
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 5, // 6
                'per_page_price'     => 65
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 70
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 85
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 9, // 48 hours
                'per_page_price'     => 105
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 10, // 24 hours
                'per_page_price'     => 115
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 11, // 12 hours
                'per_page_price'     => 155
             ],
             [
                'academic_level_id'  => 2, // Undergraduate
                'deadline_id'        => 12, // 6 hours
                'per_page_price'     => 175
             ],


             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 1, // 20
                'per_page_price'     => 50
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 2, // 15
                'per_page_price'     => 55
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 3, // 10
                'per_page_price'     => 65
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 4, // 7
                'per_page_price'     => 70
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 5, // 6
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 80
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 85
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 95
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 9, // 48 hours
                'per_page_price'     => 115
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 10, // 24 hours
                'per_page_price'     => 125
             ],
             [
                'academic_level_id'  => 3, // Master
                'deadline_id'        => 11, // 12 hours
                'per_page_price'     => 165
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 12, // 6 hours
                'per_page_price'     => 185
             ],


             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 1, // 20
                'per_page_price'     => 60
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 2, // 15
                'per_page_price'     => 65
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 3, // 10
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 4, // 7
                'per_page_price'     => 80
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 5, // 6
                'per_page_price'     => 85
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 90
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 95
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 95
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 9, // 48 hours
                'per_page_price'     => 125
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 10, // 24 hours
                'per_page_price'     => 135
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 11, // 12 hours
                'per_page_price'     => 175
             ],
             [
                'academic_level_id'  => 4, // Ph.D
                'deadline_id'        => 12, // 6 hours
                'per_page_price'     => 195
             ],

             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 1, // 20
                'per_page_price'     => 70
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 2, // 15
                'per_page_price'     => 75
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 3, // 10
                'per_page_price'     => 85
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 4, // 7
                'per_page_price'     => 90
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 5, // 6
                'per_page_price'     => 95
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 6, // 5 days
                'per_page_price'     => 100
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 7, // 4 days
                'per_page_price'     => 105
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 8, // 3 days
                'per_page_price'     => 105
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 9, // 48 hours
                'per_page_price'     => 135
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 10, // 24 hours
                'per_page_price'     => 145
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 11, // 12 hours
                'per_page_price'     => 185
             ],
             [
                'academic_level_id'  => 5, // Admission
                'deadline_id'        => 12, // 6 hours
                'per_page_price'     => 205
             ],
        ]);
    }
}
