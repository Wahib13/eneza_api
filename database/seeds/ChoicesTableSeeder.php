<?php

use Illuminate\Database\Seeder;
use App\Choice;
use App\Question;

class ChoicesTableSeeder extends Seeder
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

        Choice::truncate();

        // set it back
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$faker = \Faker\Factory::create();

		$questions = Question::all()->pluck('id')->toArray();

		for ($i = 0; $i < 20; $i++) {

			$question_id = $faker->randomElement($questions);

			Choice::create([
				'body' => $faker->word,
				'question_id' => $question_id,
				'choice_number'=> $faker->randomNumber($nbDigits = 1),
			]);
		}
    }
}
