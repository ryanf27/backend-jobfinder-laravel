<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Category;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();
        $employers = Employer::factory(10)->create();

        foreach ($employers as $employer) {
            foreach ($categories as $category) {
                Job::factory()->count(3)->create([
                    'employer_id' => $employer->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
