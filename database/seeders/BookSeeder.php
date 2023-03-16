<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => 'Cậu bé rồng',
            'isbn' => '123',
            'author' => 'Thần đồng đất việt',
            'type' => 'Truyện hài',
            'number_pages' => '17',
            'year' => '2023'
        ]);
        DB::table('books')->insert([
            'name' => 'Cậu vàng',
            'isbn' => '124',
            'author' => 'Lão hạc',
            'type' => 'Truyện buồn',
            'number_pages' => '17',
            'year' => '2023'
        ]);
        DB::table('books')->insert([
            'name' => 'Juliet',
            'isbn' => '125',
            'author' => 'Romeo',
            'type' => 'Truyện vui',
            'number_pages' => '18',
            'year' => '2021'
        ]);
        DB::table('books')->insert([
            'name' => 'Bóng ma bên cửa sổ',
            'isbn' => '128',
            'author' => 'Nguyễn ngọc ngạn',
            'type' => 'Truyện ma',
            'number_pages' => '16',
            'year' => '2012'
        ]);
        DB::table('books')->insert([
            'name' => 'Sọ dừa',
            'isbn' => '129',
            'author' => 'Thật Thuyết',
            'type' => 'Truyện Cười',
            'number_pages' => '17',
            'year' => '2012'
        ]);
        DB::table('books')->insert([
            'name' => 'Cô gái bán diêm',
            'isbn' => '128',
            'author' => 'Vũ anh tú',
            'type' => 'Tiểu Thuyết',
            'number_pages' => '17',
            'year' => '2023'
        ]);
    }
}

