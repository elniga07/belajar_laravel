<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts =[
            ['titel'=>'Tips Cepat Modar', 'content' =>'lorem ipsum'],
            ['titel'=>'Haruskah Menunda Modar', 'content' =>'lorem ipsum'],
            ['titel'=>'Membangun Visi Misi Modar', 'content' =>'lorem ipsum']
        ];
        DB::table('posts')->insert($posts);
    }
}
