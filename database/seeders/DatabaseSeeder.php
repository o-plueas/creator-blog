<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Blogging;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        $user = User::factory()->create([
            'name'=>'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Blogging::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Blogging::factory(6)->create();


        // Blogging::create([
        //     'id' => 1,
        //     'categories' => 'fruit. fitness',
        //     'title' => 'Antioxidant in fruit',
        //     'description' => 'loremloremloremloremloremlorem',
        //     'author' => 'Princr kay',
        //     'qualification' => 'MSc'
        // ]);


        // Blogging::create([
        //     'id' => 2,
        //     'categories' => 'apple. fitness',
        //     'title' => 'Phytochemicals Antioxidant in fruit',
        //     'description' => 'loremloremloremloremloremlorem',
        //     'author' => 'Sam kay',
        //     'qualification' => 'BSc'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
