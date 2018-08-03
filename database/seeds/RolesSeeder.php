<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'note'=>'Admin-Người quản trị trang web'
        ]);

        Role::create([
            'name'=>'Lecturer',
            'note'=>'Giảng viên-người nhập điểm'
        ]);

        Role::create([
            'name'=>'Student',
            'note'=>'Sinh viên-Người xem điểm'
        ]);
    }
}
