<?php

use Illuminate\Database\Seeder;
use App\Room;
use Faker\Generator as Faker;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newRoom = new Room;
            $newRoom->floor = $faker->randomDigit();
            $newRoom->seats = $faker->numberBetween($min = 10, $max = 100);
            $newRoom->save();
        }
    }
}
