<?php

use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            'coffees' => rand(),
            'hours' => rand(),
            'clients' => rand(),

        ]);
    }
}
