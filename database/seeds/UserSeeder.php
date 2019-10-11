<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private function createUsers($password)
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $password,
        ]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $password = Hash::make('admin');

        User::create([
            'name' => 'admin',
            'email' => 'test@test.com',
            'password' => $password,
        ]);

        foreach (range(1, 10) as $index) {
            $this->createUsers($password);
        }
    }
}
