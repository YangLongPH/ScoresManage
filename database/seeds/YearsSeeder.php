<?php

use Illuminate\Database\Seeder;
use App\Models\Year;

class YearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create([
            'name'=>'2017-2018',
            'note'=>'Năm học 2017 đến 2018'
        ]);

        Year::create([
            'name'=>'2018-2019',
            'note'=>'Năm học 2018 đến 2019'
        ]);

        Year::create([
            'name'=>'2019-2020',
            'note'=>'Năm học 2019 đến 2020'
        ]);
    }
}
