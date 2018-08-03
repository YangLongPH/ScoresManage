<?php

use Illuminate\Database\Seeder;
use App\Models\ClassCourse;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(SemestersSeeder::class);
        $this->call(YearsSeeder::class);
        $this->call(EducatesSeeder::class);
        $this->call(ClassCoursesSeeder::class);
        $this->call(ClassSubjectsSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(LecturersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ScoresSeeder::class);
    }
}
