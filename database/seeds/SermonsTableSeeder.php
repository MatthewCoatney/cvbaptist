<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;

class SermonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

      DB::table('sermons')->insert([
          'title' => 'A Better Salvation',
          'text' => $faker->paragraph,
          'tags' => 'hebrews',
          'file' => 'A Better Salvation',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Gift Of Tongues',
          'text' => $faker->paragraph,
          'tags' => 'acts',
          'file' => 'Gift Of Tongues',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'God Fully Expressed His Love',
          'text' => $faker->paragraph,
          'tags' => 'john',
          'file' => 'God Fully Expressed His Love',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Intro To Acts',
          'text' => $faker->paragraph,
          'tags' => 'acts',
          'file' => 'Intro To Acts',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Jesus Feeds 4000',
          'text' => $faker->paragraph,
          'tags' => 'matthew',
          'file' => 'Jesus Feeds 4000',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Lessons From The Early Church',
          'text' => $faker->paragraph,
          'tags' => 'acts',
          'file' => 'Lessons From The Early Church',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Mothers Day Service',
          'text' => $faker->paragraph,
          'tags' => 'genesis',
          'file' => 'Mothers Day Service',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'The Last Age',
          'text' => $faker->paragraph,
          'tags' => 'revelation',
          'file' => 'The Last Age',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'The Miracles Of Jesus',
          'text' => $faker->paragraph,
          'tags' => 'mark',
          'file' => 'The Miracles Of Jesus',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Fathers Day Message',
          'text' => $faker->paragraph,
          'tags' => 'proverbs',
          'file' => 'Fathers Day Message',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

      DB::table('sermons')->insert([
          'title' => 'Jesus Is The High Priest',
          'text' => $faker->paragraph,
          'tags' => 'romans',
          'file' => 'Jesus Is The High Priest',
          'date' => $faker->dateTimeBetween('-30 days', '+30 days'),
          'img' => '' ,
          'url' => '',
      ]);

    }
}
