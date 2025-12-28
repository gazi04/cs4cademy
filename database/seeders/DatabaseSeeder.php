<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\AvatarItem;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([ */
        /*     'name' => 'Test User', */
        /*     'email' => 'test@example.com', */
        /* ]); */

        AvatarItem::factory(10)->create();
        Achievement::factory(5)->create();
        Course::factory(3)->hasLessons(5)->create();
    }
}
