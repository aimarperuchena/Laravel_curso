<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title'=>'Title 1',
            'body' => 'Content of the post #1'
        ]);

        DB::table('post')->insert([
            'title'=>'Title 2',
            'body' => 'Content of the post #2'
        ]);
        DB::table('post')->insert([
            'title'=>'Title 3',
            'body' => 'Content of the post #3'
        ]);
    }
}
