<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();
        $cl = [
            [
                'last_name'         => 'Batausa',
                'first_name'        => 'Nathaniel',
                'middle_name'       => 'Roba',
                'address'           => '#166 Cancunay Tinangnan, Tubigon, Bohol',
                'birth_date'        => '2002-11-16',
                'phone_number'      => '09201295969',
                'email'             => 'nathanielbatausafgo@gmail.com',
                'initial_deposit'   => '20000'
            ],
            [
                'last_name'         => 'Pongase',
                'first_name'        => 'John Ivan',
                'middle_name'       => 'Sumipo',
                'address'           => 'Cabulijan, Tubigon, Bohol',
                'birth_date'        => '2001-06-09',
                'phone_number'      => '09123456789',
                'email'             => 'sumipo231@gmail.com',
                'initial_deposit'   => '30000'
            ],
            [
                'last_name'         => 'Montañez',
                'first_name'        => 'Kien',
                'middle_name'       => 'Juanich',
                'address'           => 'Macaas, Tubigon, Bohol',
                'birth_date'        => '2002-07-18',
                'phone_number'      => '09123456789',
                'email'             => 'montanez45@gmail.com',
                'initial_deposit'   => '30000'
            ],
            [
                'last_name'         => 'Salutan',
                'first_name'        => 'John Emanuelle',
                'middle_name'       => 'Resaba',
                'address'           => 'Bunacan, Tubigon, Bohol',
                'birth_date'        => '2002-05-01',
                'phone_number'      => '09123456789',
                'email'             => 'salutanemanuelle@gmail.com',
                'initial_deposit'   => '30000'
            ],
            // [
            //     'last_name'         => 'Montañez',
            //     'first_name'        => 'Kien 2',
            //     'middle_name'       => 'Juanich',
            //     'address'           => 'Macaas, Tubigon, Bohol',
            //     'birth_date'        => '2002-07-18',
            //     'phone_number'      => '09123456789',
            //     'email'             => 'montanez34@gmail.com',
            //     'initial_deposit'   => '30000'
            // ],
            // [
            //     'last_name'         => 'Montañez',
            //     'first_name'        => 'Kien 3',
            //     'middle_name'       => 'Juanich',
            //     'address'           => 'Macaas, Tubigon, Bohol',
            //     'birth_date'        => '2002-07-18',
            //     'phone_number'      => '09123456789',
            //     'email'             => 'montanez56@gmail.com',
            //     'initial_deposit'   => '30000'
            // ],
            // [
            //     'last_name'         => 'Batausa',
            //     'first_name'        => 'Nathaniel 2',
            //     'middle_name'       => 'Roba',
            //     'address'           => '#166 Cancunay Tinangnan, Tubigon, Bohol',
            //     'birth_date'        => '2002-11-16',
            //     'phone_number'      => '09201295969',
            //     'email'             => 'blackheidarker@gmail.com',
            //     'initial_deposit'   => '20000'
            // ],
            // [
            //     'last_name'         => 'Batausa',
            //     'first_name'        => 'Nathaniel 3',
            //     'middle_name'       => 'Roba',
            //     'address'           => '#166 Cancunay Tinangnan, Tubigon, Bohol',
            //     'birth_date'        => '2002-11-16',
            //     'phone_number'      => '09201295969',
            //     'email'             => 'akaiperacc@gmail.com',
            //     'initial_deposit'   => '20000'
            // ],
            [
                'last_name'         => 'Sacedon',
                'first_name'        => 'Christian James',
                'middle_name'       => 'Rulona',
                'address'           => 'Tinangnan, Tubigon, Bohol',
                'birth_date'        => '2001-10-18',
                'phone_number'      => '09201295969',
                'email'             => 'christiansacedon3@gmail.com',
                'initial_deposit'   => '20000'
            ],
            [
                'last_name'         => 'Mejias',
                'first_name'        => 'Francis Michael',
                'middle_name'       => 'Cabrera',
                'address'           => 'Inabanga, Bohol',
                'birth_date'        => '2002-07-08',
                'phone_number'      => '09201295969',
                'email'             => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit'   => '20000'
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
