<?php

use Illuminate\Database\Seeder;
use App\Job;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 8)->create()->each(function($category){
            for($i = 0; $i < rand(2,4); $i++)
            $category->jobs()->save(factory(App\Job::class)->make());
        });
    }
}
