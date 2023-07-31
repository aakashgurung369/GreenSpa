<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $home = [
            'heading'=> 'your heading',
            'description'=> 'please enter your description',
            'image'=> 'User.jpg',
        ];

        Home::create($home);
    }
}
