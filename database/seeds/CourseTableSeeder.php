<?php

use Illuminate\Database\Seeder;
use App\Course;
class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            "course_name" => 'Computational Thinking',
            "price" => '0',
            'title_id' => 1
        ]);
        
    }
}
