<?php

use Illuminate\Database\Seeder;
use App\Models\ClassSubject;

class ClassSubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassSubject::create([
            'codesubject'=>'INT3306',
            'name'=>'Phát triển ứng dụng Web',
            'note'=>'Mon hoc thu 1',
            'id_typeeducate'=>0,
        ]);

        ClassSubject::create([
            'codesubject'=>'INT3403',
            'name'=>'Đồ họa máy tính',
            'note'=>'Mon hoc thu 2',
            'id_typeeducate'=>0,
        ]);

        ClassSubject::create([
            'codesubject'=>'INT2208',
            'name'=>'Công nghệ phần mềm	',
            'note'=>'Mon hoc thu 3',
            'id_typeeducate'=>0,
        ]);
    }
}
