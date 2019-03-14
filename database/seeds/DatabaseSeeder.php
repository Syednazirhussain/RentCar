<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(VehicleSpecificationsTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(GeneralInformationTableSeeder::class);
    }
}
