<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
class UsersTableDataSeeder extends Seeder
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
	        DB::table('users')->insert([
	            'name' => $faker->name,
                'email' => $faker->email,
                'role_id' => 2,
	            'password' => bcrypt('secret'),
	        ]);
    }
}
}
