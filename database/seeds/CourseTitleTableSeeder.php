<?php

use Illuminate\Database\Seeder;
use App\CourseTitles;
class CourseTitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseTitles::create([
            'title' => 'pondasi-skill-abad-21'
        ]);
        CourseTitles::create([
            'title' => 'pondasi-pokok'
        ]);
        CourseTitles::create([
            'title' => 'komunitas-orangtua'
        ]);
    }
}
