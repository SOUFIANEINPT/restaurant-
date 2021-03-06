<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class TablesTableDataSeeder extends Seeder
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
	        DB::table('tabels')->insert([
                'name' => 'table'.$index,
                'picture' =>$faker->imageUrl(350, 350),
                'menu_id' =>rand(1,10),
                'categories_id' =>rand(1,10),
                'Nombrechaire'=> rand(4,6),               
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
    }
}
}