<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Question;
use App\Subject;

class QuizsTableSeeder extends Seeder
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

        Quiz::truncate();
        
        // set it back
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$faker = \Faker\Factory::create();

		$subjects = Subject::all()->pluck('id')->toArray();

		for ($i = 0; $i < 10; $i++) {
		    $subject_id = $faker->randomElement($subjects);

		    Quiz::create([
		    	'name' => $faker->word,
		        'subject_id' => $subject_id,
		    ]);
		}
    }
}
