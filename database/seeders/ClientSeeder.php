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
        Client::factory(30)->create();
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
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
