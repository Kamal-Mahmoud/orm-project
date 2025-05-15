<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(2)->is_admin()->trashed()->unverified()->create();
        // User::factory(2)->create();
        User::factory(10)->sequence([
            'is_admin' => '0'
        ], [
            'is_admin' => '1',

        ])->create();
    }
}
