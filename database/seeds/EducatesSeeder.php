<?php

use Illuminate\Database\Seeder;
use App\Models\TypeEducate;

class EducatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEducate::create([
            'name'=>'Đại học',
            'note'=>'Hệ đào tạo cho sinh viên'
        ]);

        TypeEducate::create([
            'name'=>'Sau đại học',
            'note'=>'Hệ đào tạo cho nghiên cứu sinh, tiến sĩ'
        ]);
    }
}
