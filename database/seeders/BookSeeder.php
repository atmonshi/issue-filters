<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->create([
            'title' => 'Book',
            'company_id' => 1,
        ]);
    }
}
