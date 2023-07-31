<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class defaultValue extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = [
            'name'=> 'admin',
            'email'=> 'greenspa@gmail.com',
            'password'=> bcrypt(1234567890),
        ];

        Admin::create($Admin);
    }
}