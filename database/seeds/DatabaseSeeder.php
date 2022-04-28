<?php

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
            UserTableSeeder::class,
            SubjectTableSeeder::class,
            PaperTypeTableSeeder::class,
            ReferenceTableSeeder::class,
            CategoryTableSeeder::class,
            TagsTableSeeder::class,
            AcademicLevelTableSeeder::class,
            CountryTableSeeder::class,
            DeadlineTableSeeder::class,
            FareTableSeeder::class,
            WebSettingTableSeeder::class,
            ServiceTableSeeder::class,
        ]);
    }
}
