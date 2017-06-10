<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class)->create([
            "email" => "test@test.com"
        ]);

        factory(User::class)->create([
            "email" => "admin@test.com",
            "admin" => true
        ]);

        factory(User::class, 20)->create();
    }
}
