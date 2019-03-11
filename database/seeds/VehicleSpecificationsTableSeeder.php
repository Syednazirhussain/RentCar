<?php

use Illuminate\Database\Seeder;

class VehicleSpecificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicle_specifications')->delete();
        
        \DB::table('vehicle_specifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bluetooth',
                'created_at' => '2019-03-09 12:22:54',
                'updated_at' => '2019-03-09 13:26:21',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gps Navigation',
                'created_at' => '2019-03-09 13:27:59',
                'updated_at' => '2019-03-09 13:28:26',
                'deleted_at' => '2019-03-09 13:28:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ABS brakes',
                'created_at' => '2019-03-10 05:57:15',
                'updated_at' => '2019-03-10 05:57:15',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Auto transmission',
                'created_at' => '2019-03-10 05:57:29',
                'updated_at' => '2019-03-10 05:57:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Climate control',
                'created_at' => '2019-03-10 05:57:40',
                'updated_at' => '2019-03-10 05:57:40',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'DVD Video System',
                'created_at' => '2019-03-10 05:57:51',
                'updated_at' => '2019-03-10 05:57:51',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Immobilizer key',
                'created_at' => '2019-03-10 05:58:06',
                'updated_at' => '2019-03-10 05:58:06',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Power lock',
                'created_at' => '2019-03-10 05:58:25',
                'updated_at' => '2019-03-10 05:58:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Rear Camera',
                'created_at' => '2019-03-10 05:58:35',
                'updated_at' => '2019-03-10 05:58:35',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Power window',
                'created_at' => '2019-03-10 05:58:47',
                'updated_at' => '2019-03-10 05:58:47',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'USB input',
                'created_at' => '2019-03-10 05:59:00',
                'updated_at' => '2019-03-10 05:59:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'FM Radio',
                'created_at' => '2019-03-10 05:59:13',
                'updated_at' => '2019-03-10 05:59:13',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Heated seats',
                'created_at' => '2019-03-10 05:59:24',
                'updated_at' => '2019-03-10 05:59:24',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Power steering',
                'created_at' => '2019-03-10 05:59:39',
                'updated_at' => '2019-03-10 05:59:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}