<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $subjects = ['math','latin','biology', 'history'];

            $newTeacher = new Teacher;
            $newTeacher->surname = $faker->lastName();
            $newTeacher->name = $faker->firstName($gender);
            $newTeacher->gender = $gender == 'male' ? 'm' : 'f';
            $newTeacher->subject = $faker->randomElement($array = $subjects);
            $newTeacher->date_recruitment =
                $faker->date($format = 'Y-m-d', $max = 'now');
            $newTeacher->save();
        }
    }
}
