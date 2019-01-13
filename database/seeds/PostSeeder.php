<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
                'title' => 'Cara Cepat Belajar Ngoding',
                'content' => 'lorem ipsum dolor wekaweka',
            ],
            [
                'title' => 'Memulai Laravel',
                'content' => 'lorem ipsum dolor wekaweka',
            ],
            [
                'title' => 'Tips hidup tenang',
                'content' => 'lorem ipsum dolor wekaweka',
            ]
        ];
        DB::table('posts')->insert($sample);
    }
}
