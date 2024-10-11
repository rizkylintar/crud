<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTambahSeeder extends Seeder
{
    public function run()
    {
        DB::table('usertambah')->insert([
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'phone' => '1234567890',
                'password' => bcrypt('12345678'), // Menggunakan bcrypt untuk hashing
                'avatar' => null,
                'role' => 'user',
            ],
            // Tambahkan lebih banyak data jika perlu
        ]);
    }
}
