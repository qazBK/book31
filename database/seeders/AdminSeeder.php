<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->createOrFirst([
            'id' => 1,
            'email'=>'admin@books.com',
            'password'=>Hash::make('book2215'),
            'is_admin'=>true,
        ]);
    }
}
