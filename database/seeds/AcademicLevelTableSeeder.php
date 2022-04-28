<?php

use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicLevel::insert([
            [
                'name' => 'College',
            ],
            [
                'name' => 'Undergraduate',
            ],
            [
                'name' => 'Master\'s',
            ],
            [
                'name' => 'Ph.D.',
            ],
            [
                'name' => 'Addmission Essay',
            ],
        ]);
    }
}
