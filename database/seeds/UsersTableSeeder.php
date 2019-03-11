<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'syednazir13@gmail.com',
                'password' => '$2y$10$mnzO1Jtvm2Hzzo2ay7TeNeJA2w08RkZKCsSgQVUuF6v0uZhb048YG',
                'remember_token' => '60r2OxW2ax5fWGKfaDS2IxjJvJZnB5fo8i16fAaygfqKnaFzQItnRiY1lXPo',
                'created_at' => '2019-03-04 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}