<?php

use Illuminate\Database\Seeder;
use App\Minicourse;
class MinicourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Minicourse::create([
            'minicourse_name' => 'Dansa If/Else',
            'link_video' => '-',
            'link_doc' => 'https://drive.google.com',
            'link_other_resource' => '-',
            'mc_thumbnail' => 'ifelse.png',
            'description' => 'description for unplugged',
            'subcourse_id' => 1
        ]);
        Minicourse::create([
            'minicourse_name' => 'Kisah Abstraksi',
            'link_video' => '-',
            'link_doc' => 'https://drive.google.com',
            'link_other_resource' => '-',
            'mc_thumbnail' => 'abstraksi.png',
            'description' => 'description for unplugged',
            'subcourse_id' => 1
        ]);
        Minicourse::create([
            'minicourse_name' => 'Algoritma Origami',
            'link_video' => '-',
            'link_doc' => 'https://drive.google.com',
            'link_other_resource' => '-',
            'mc_thumbnail' => 'origami.png',
            'description' => 'description for unplugged',
            'subcourse_id' => 1
        ]);
        Minicourse::create([
            'minicourse_name' => 'Persistence Pointing',
            'link_video' => '-',
            'link_doc' => 'https://drive.google.com',
            'link_other_resource' => '-',
            'mc_thumbnail' => 'persistence.png',
            'description' => 'description for unplugged',
            'subcourse_id' => 1
        ]);
        Minicourse::create([
            'minicourse_name' => 'Pertanyaan Kondisional',
            'link_video' => '-',
            'link_doc' => 'https://drive.google.com',
            'link_other_resource' => '-',
            'mc_thumbnail' => 'kondisi.png',
            'description' => 'description for unplugged',
            'subcourse_id' => 1
        ]);
        Minicourse::create([
            'minicourse_name' => 'Linked List',
            'link_video' => 'https://youtu.be/ZFQfyqeDCQ4',
            'link_doc' => '-',
            'link_other_resource' => '-',
            'mc_thumbnail' => '-',
            'description' => 'description for linked list',
            'subcourse_id' => 3
        ]);
        Minicourse::create([
            'minicourse_name' => 'Logical Reasoning',
            'link_video' => 'https://youtu.be/9KGhNf73apA',
            'link_doc' => '-',
            'link_other_resource' => '-',
            'mc_thumbnail' => '-',
            'description' => 'description for logical reasoning',
            'subcourse_id' => 3
        ]);
    }
}
