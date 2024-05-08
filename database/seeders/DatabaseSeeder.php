<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@filamentphp.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(CompanySeeder::class);
        $this->call(BookSeeder::class);

        DB::table('company_user')->insert([
            'company_id' => 1,
            'user_id' => 1,
        ]);
    }
}
