<?php

use Illuminate\Database\Seeder;
use App\Models\Lecturer;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lecturer::create([
            'fullname'=>'Ma Thị Châu',
            'office'=>'Giảng viên'
        ]);

        Lecturer::create([
            'fullname'=>'Lê Đình Thanh',
            'office'=>'Giảng viên'
        ]);

        Lecturer::create([
            'fullname'=>'Đỗ Đức Hạnh',
            'office'=>'Giảng viên'
        ]);

        Lecturer::create([
            'fullname'=>'Lê Phê Đô',
            'office'=>'Giảng viên'
        ]);
    }
}
