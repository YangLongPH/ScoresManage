<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'mssv'=>13020553,
            'fullname'=>'Đặng Danh Phương',
            'email'=>'yanglong.ph@gmail.com',
            'major'=>'Công nghệ thông tin',
            'id_classcourse'=>0,
            'id_typeeducate'=>0
        ]);

        Student::create([
            'mssv'=>13020374,
            'fullname'=>'Nguyên Quang Nhật',
            'email'=>'NhatNG.ph@gmail.com',
            'major'=>'Cơ điện tử',
            'id_classcourse'=>1,
            'id_typeeducate'=>0
        ]);
    }
}
