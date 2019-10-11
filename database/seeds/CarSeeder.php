<?php

use App\Car;
use Faker\Factory as Faker;
use Faker\Provider\Fakecar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{

    private function databaseInsert()
    {
        $faker = Faker::create();
        $faker->addProvider(new Fakecar($faker));

        DB::table('cars')->insert([
            'name' => $faker->vehicleBrand,
            'price' => $faker->randomNumber(4),
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();

        foreach (range(1, 10) as $index) {
            $this->databaseInsert();
        }
    }
}
