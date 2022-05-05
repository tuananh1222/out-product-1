<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(
            [
                'role_id' => 0, // 0: QT, 1 KH
                'name' => 'Tuấn Anh',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456789'),
                'phone' => '0334736100',
                'address' => 'Hà Nội'
            ],
        );
    }
}
