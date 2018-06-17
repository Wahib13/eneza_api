<?php

use Illuminate\Database\Seeder;
use App\Tutorial;
use App\Subject;

class TutorialsTableSeeder extends Seeder
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

        Tutorial::truncate();

        // set it back
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$faker = \Faker\Factory::create();

		$subjects = Subject::all()->pluck('id')->toArray();

		for ($i = 0; $i < 20; $i++) {

			$subject_id = $faker->randomElement($subjects);

			Tutorial::create([
				'body' => $faker->paragraph,
				'subject_id' => $subject_id,
			]);
		}
    }
}
