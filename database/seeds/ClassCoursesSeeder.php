<?php

use Illuminate\Database\Seeder;
use App\Models\ClassCourse;

class ClassCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassCourse::create([
            'codecourse'=>'K58CC',
            'name'=>'QH-2013-I/CQ-C-C',
            'note'=>'Khóa 58 khoa công nghệ thông tin',
            'id_typeeducate'=>0            
        ]);

        ClassCourse::create([
            'codecourse'=>'K59M',
            'name'=>'QH-2014-I/CQ-M',
            'note'=>'Khóa 58 khoa cơ điện tử',
            'id_typeeducate'=>0
        ]);
    }
}
