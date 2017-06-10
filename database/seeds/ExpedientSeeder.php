<?php

use Illuminate\Database\Seeder;
use App\Expedient;
use App\Resource;

class ExpedientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Expedient::class, 50)->create([
            "user_id" => 1
        ])->each(function($expedient){
            $expedient->resources()->save(factory(Resource::class)->make());
        });
    }
}
