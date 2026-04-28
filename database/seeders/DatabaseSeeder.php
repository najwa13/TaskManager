<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;
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

    $categories = Category::factory(5)->create();

   
    $user = User::factory()->create([
        'name' => 'Najwa',
        'email' => 'najwa@email.com',
    ]);

    Task::factory(10)->create([
        'user_id' => $user->id,
        'category_id' => $categories->random()->id,
    ]);
    }
}
