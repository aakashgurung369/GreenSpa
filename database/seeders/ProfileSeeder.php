<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = [
            'youtube'=> 'https://www.youtube.com',
            'facebook'=> 'https://www.facebook.com',
            'insta'=> 'https://www.instagram.com',
            'tiktok'=> 'https://www.tiktok.com',
            'image'=> 'User.jpg',
        ];

        Profile::create($profile);
    }
}
