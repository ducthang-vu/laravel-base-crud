<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*
        $sample[
            [
                'surname' => 'provaC',
                'name' => 'nome',
                'gender' => 'm',
                ''
            ]
        ]


        foreach($sample as $student) {
            $newStudent = new Student()
            $newStudent->fill($student)  //functiona anche se non fillable
        }
        */

        // php artisan db:seed --class=StudentsTableSeeder

        //Student::truncate();

        $records = 10;
        for ($i=0; $i < $records; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $genderSrhot = $gender == 'male' ? 'm' : 'f';

            $newStudent = new Student();
            $newStudent->surname = $faker->lastName();
            $newStudent->name = $faker->firstName();
            $newStudent->gender = $genderSrhot;
            $newStudent->birth_year = $faker->year($max = 'now');
            $newStudent->class = 5;
            $newStudent->save();
        }
    }
}
