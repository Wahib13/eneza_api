<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Course;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // hack to enable truncation on foreign key table
       	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Subject::truncate();
        
        // set it back
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$faker = \Faker\Factory::create();

		$courses = Course::all()->pluck('id')->toArray();

		for ($i = 0; $i < 10; $i++) {
		    $course_id = $faker->randomElement($courses);

		    Subject::create([
		        'name' => $faker->word,
		        'course_id' => $course_id,
		    ]);
		}
    }
}
