<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 150; $i++) {
            $new_train_object = new Train();
            $new_train_object->company = $faker->company();
            $new_train_object->starting_station = $faker->city();
            $new_train_object->arrival_station = $faker->city();
            $new_train_object->departure_time = $faker->dateTime();
            $new_train_object->arrival_time = $faker->dateTime();
            $new_train_object->train_code = $faker->numberBetween(1000, 9999999);
            $new_train_object->number_of_carriages = $faker->numberBetween(1,10);
            $new_train_object->on_time = $faker->randomElement([true, false]);
            $new_train_object->cancelled = $faker->randomElement([true, false]);
            $new_train_object->save();
        }
    }
}
