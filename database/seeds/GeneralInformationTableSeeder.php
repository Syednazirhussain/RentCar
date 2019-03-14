<?php

use Illuminate\Database\Seeder;

class GeneralInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('general_information')->delete();
        
        \DB::table('general_information')->insert(array (
            0 => 
            array (
                'name' => 'RCT Rent A Car',
                'code' => 'site-setting',
                'short_name' => 'RCTCAR',
                'title' => 'BOOK YOUR IDEAL TODAY!',
                'title_description' => 'NOW! hire car that you desire, select to pay the way you want. Our professional teams are always there to guarantee your ride is flexible.',
                'about_description' => 'At STS Rent a Car, our prime idea is to simplify travelling for you and we are here to make it happen 24/7 easy and luxury transport services and affordable services. Want to know more about us',
                'logo' => 'rbLNUtHUPH3LDpPEirBt0fHtcwwljtiXevmbE1yH.png',
                'footer_description' => 'At STS Rent a Car, our prime business idea is simplify travelling for you and that\'s why our business solegen is "TRAVELLING FOR YOU"

For Picture Gallery',
                'helpline' => '03 111 999 787',
                'contact' => '92 21 36954714',
                'address' => ' Office # 11, Sultan Plaza Sector 5-H, 2 Minut Chowrangi, North Karachi, Shahrah-e-Usman, Sector 5 D New Karachi, Karachi, Sindh 75850',
                'email' => 'info@stsrentacar.pk',
                'instagram' => 'https://www.instagram.com/stsrentacar/',
                'pinterest' => 'https://www.pinterest.com/stsrentacar0267/',
                'twitter' => 'https://twitter.com/Stsrentacar',
                'youtube' => 'https://www.youtube.com/channel/UC5nN9qCkHQIUW0bef803HMA',
                'linkdin' => 'https://www.linkedin.com/in/stsrentacar/',
                'facebook' => 'https://www.facebook.com/STSRentACar.pk/',
                'created_at' => '2019-03-10 20:44:09',
                'updated_at' => '2019-03-11 06:08:43',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}