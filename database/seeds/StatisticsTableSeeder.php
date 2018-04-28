<?php

use Illuminate\Database\Seeder;
use \App\Statistics;

class StatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Statistics::insert([
            'coffees' => rand(55, 183),
            'hours' => rand(121, 281),
            'clients' => rand(3, 15)
        ]);
    }
}
