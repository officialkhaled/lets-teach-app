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

        Tag::create([
            'name' => "English Medium",
            'type' => 3,
        ]);

        Tag::create([
            'name' => "Bangla Medium",
            'type' => 3,
        ]);

        Tag::create([
            'name' => "Male",
            'type' => 4,
        ]);

        Tag::create([
            'name' => "Female",
            'type' => 4,
        ]);

        Tag::create([
            'name' => "4",
            'type' => 5,
        ]);

        Tag::create([
            'name' => "5",
            'type' => 5,
        ]);
    }
}
