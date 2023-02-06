<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
            'class_id' => 1,
            'name' => '藤田テスト01',
            'kana' => 'ふじたてすと01',
            'email' => 'test@test.com',
            'password' => 'password123',
            'zip_code' => 7330813,
            'address1' => '広島市西区',
            'address2' => '己斐中',
            'tel' => '09022907922',
            'gender' => 1,
            'birthday' => '2023-02-08',
            'joindate' => '2023-02-08',
            'is_payment' => 0,
            'introducer' => 'ふじテス',
            'parent_name' => '詞久',
            'canpaign' => '秋',
            'memo' => 'テスト',
            'is_rest' => 0,
            ]
        ]);
    }
}