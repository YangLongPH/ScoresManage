<?php

use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Score::create([
            'link'=>'score1',
            'id_classsubject'=>1,
            'id_semester'=>1,
            'id_year'=>1
        ]);

        Score::create([
            'link'=>'score2',
            'id_classsubject'=>1,
            'id_semester'=>1,
            'id_year'=>1
        ]);
    }
}
