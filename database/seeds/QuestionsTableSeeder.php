<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Quiz;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	$faker = \Faker\Factory::create();

        $quizzes = Quiz::all()->pluck('id')->toArray();

		for ($i = 0; $i < 10; $i++) {

            $quiz_id = $faker->randomElement($quizzes);

		    Question::create([
		        'body' => $faker->sentence,
		        'correct' => $faker->randomNumber($nbDigits = 1),
                'quiz_id' => $quiz_id,
		    ]);
		}
    }
}
