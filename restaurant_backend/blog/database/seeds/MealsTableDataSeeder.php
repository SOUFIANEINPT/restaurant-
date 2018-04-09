<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class MealsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
	        DB::table('meals')->insert([
	            'name' => $faker->name,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
    }
    }
}
