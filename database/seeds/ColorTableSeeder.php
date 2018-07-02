<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Color::truncate();

        foreach(range(1, 20) as $i) {
        	Color::create([
        		'name' => $faker->word,
        		'synonyms' => 's',
        		'guid' => str_random(10)
        	]);
        }
    }
}
