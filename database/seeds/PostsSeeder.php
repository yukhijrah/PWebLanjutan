<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 20; $i++) {
        	DB::table('posts')->insert([
        		'title' => $faker->word,
        		'content' => $faker->text,
        		'image' => $faker->imageUrl($width = 640, $height = 480),
        		'author' => $faker->name
        	]);
        }
    }
}
