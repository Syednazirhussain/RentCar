<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendors')->delete();
        
        \DB::table('vendors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Luxury/SUV',
                'logo' => NULL,
                'created_at' => '2019-03-09 12:11:47',
                'updated_at' => '2019-03-09 12:13:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Bus/van',
                'logo' => NULL,
                'created_at' => '2019-03-09 12:14:29',
                'updated_at' => '2019-03-09 12:14:34',
                'deleted_at' => '2019-03-09 12:14:34',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Standard/sedan',
                'logo' => NULL,
                'created_at' => '2019-03-11 21:53:58',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Hatchback/mpv',
                'logo' => NULL,
                'created_at' => '2019-03-11 21:53:58',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}