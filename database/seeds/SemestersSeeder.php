<?php

use Illuminate\Database\Seeder;
use App\Models\Semester;

class SemestersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'name'=>'Học kỳ 1',
            'codesemester'=>'HK1',
            'note'=>'Học kỳ đầu tiên của năm học'
        ]);

        Semester::create([
            'name'=>'Học kỳ 2',
            'codesemester'=>'HK2',
            'note'=>'Học kỳ thứ hai của năm học'
        ]);

        Semester::create([
            'name'=>'Học kỳ hè',
            'codesemester'=>'HKH',
            'note'=>'Học kỳ hè của năm học'
        ]);
    }
}
