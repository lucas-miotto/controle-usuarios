<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'role' => 'ADM'
        ]);

        Profile::create([
            'role' => 'USER'
        ]);
    }
}
