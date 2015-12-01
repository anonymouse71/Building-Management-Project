<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LoggersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Logger::create([

                'debit'=>$faker->randomNumber(7),
                'credit'=>$faker->randomNumber(5),
                'desc'=>$faker->paragraph(20),
                'work'=>$faker->word,
                'user_id'=>$faker->numberBetween(1,2),
                'date'=> $faker->date('Y-m-d')
            ]);
        }
    }

}