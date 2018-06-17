<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hack to enable truncation on foreign key table
       	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Course::truncate();

        // set it back
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 10; $i++) {
			Course::create([
				'name' => $faker->word,
			]);
		}
    }
}
