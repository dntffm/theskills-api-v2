<?php

use Illuminate\Database\Seeder;
use App\Subcourse;
class SubcourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcourse::create([
            'subcourse_name' => 'Unplugged Coding',
            'sc_thumbnail' => 'UNPLUGGED.png',
            'course_id' => 1
        ]);
        Subcourse::create([
            'subcourse_name' => 'Scratch Coding',
            'sc_thumbnail' => 'SCRATCH.png',
            'course_id' => 1
        ]);
        Subcourse::create([
            'subcourse_name' => 'Bebras Challenge',
            'sc_thumbnail' => 'bebras.png',
            'course_id' => 1
        ]);
    }
}
