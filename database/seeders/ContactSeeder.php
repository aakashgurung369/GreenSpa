<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = [
            'Address'=> 'your address',
            'Phone'=> '9800000000',
            'email'=> 'greenspa@gmail.com',
            'StartingTime'=> '5:00 AM',
            'EndingTime'=> '6:00 PM',
            'StartingDay'=> 'Sunday',
            'EndingDay'=> 'Friday',
        ];

        Contact::create($contact);
    }
}
