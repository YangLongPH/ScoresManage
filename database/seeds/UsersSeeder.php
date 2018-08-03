<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'admin',
            'password'=>'12345678',
            'id_role'=>0,
        ]);

        User::create([
            'username'=>'phuongdd',
            'password'=>'12345678',
            'id_role'=>2,
            'id_student'=>0
        ]);

        User::create([
            'username'=>'nhatnq',
            'password'=>'12345678',
            'id_role'=>2,
            'id_student'=>1
        ]);

        User::create([
            'username'=>'chaumt',
            'password'=>'12345678',
            'id_role'=>1,
            'id_lecturer'=>0
        ]);
    }
}
