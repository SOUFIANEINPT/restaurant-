<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
class ProductMenuTableDataSeeder extends Seeder
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
            foreach (range(1,10) as $j) {
                //$rand=rand(1, 10);
                DB::table('product_menu')->insert([     
                    'menu_id'=>$index,
                     'product_id'=>rand(1, 10)
                    ]);
               
            }
	        
    }
    }
}
