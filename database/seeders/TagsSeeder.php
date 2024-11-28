<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            Tag::create([
                'name' => "Subject $i",
                'type' => 1,
            ]);
        }
        
        for ($i = 1; $i <= 5; $i++) {
            Tag::create([
                'name' => "Grade $i",
                'type' => 2,
            ]);
        }
    }
}
