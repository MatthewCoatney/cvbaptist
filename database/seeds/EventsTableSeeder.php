<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=EventsTableSeeder
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now(); //http://php.net/manual/en/function.date.php
        $faker = Faker::create();

        // Random dates within this month
        foreach (range(1, 10) as $index) {
            $dtty = $faker->dateTimeThisMonth();
            $Ymd = $dtty->format('Y-m-d');
            $Hia = $dtty->format('h:i a');
            $day = $dtty->format('d');

            DB::table('events')->insert([
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'description' => $faker->paragraph,
                'location' => $faker->streetAddress,
                'year' => $dtty->format('Y'),
                'month_ABC' => strtoupper($dtty->format('M')),
                'month_Name' => $dtty->format('F') ,
                'start_time' => $Hia,
                'end_time' => $Hia,
                'day' => $day,
                'start' => $Ymd,//"2018-06-18",
                'end' => $Ymd,
                'allDay' => false,
            ]);
        }


        // Random dates within this year
        foreach (range(1, 100) as $index) {
            $dtty = $faker->dateTimeThisYear($now);
            $Ymd = $dtty->format('Y-m-d');
            $Hia = $dtty->format('H:i a');


            DB::table('events')->insert([
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'description' => $faker->paragraph,
                'location' => $faker->streetAddress,
                'year' => $dtty->format('Y'),
                'month_ABC' => strtoupper($dtty->format('M')),
                'month_Name' => $dtty->format('F') ,
                'start_time' => $Hia,
                'end_time' => $Hia,
                'day' => $day,
                'start' => $Ymd,//"2018-06-18",
                'end' => $Ymd,
                'allDay' => false,
            ]);
        }
    }
}
