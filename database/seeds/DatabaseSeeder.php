<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(PendingUserRequestTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(ContactTableSeeder::class),
        $this->call(DepartmentRoomTableSeeder::class);
        $this->call(SyllabusTableSeeder::class);
        $this->call(StudentMainRoutineTableSeeder::class);
        $this->call(TeacherMainRoutineTableSeeder::class);
        $this->call(StaffMainRoutineTableSeeder::class);
    }
}
