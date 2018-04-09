<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class MenuTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	        DB::table('menus')->insert([
	            'name' => 'Menu '.$index,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
    }
    }
}
