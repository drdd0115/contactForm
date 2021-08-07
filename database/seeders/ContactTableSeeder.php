<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '田中 太郎',
            'gender' => 1,
            'email' => 'tanaka@gmail.com',
            'postcode' => '3216547',
            'address' => '大阪府東淀川',
            'building_name' => '田中ビル',
            'opinion' => 'hello world'
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'fullname' => '田中 直子',
            'gender' => 2,
            'email' => 'tanaka0123@gmail.com',
            'postcode' => '3214657',
            'address' => '大阪府西淀川',
            'building_name' => '佐藤ビル',
            'opinion' => 'テキストテスト'
        ];
        DB::table('contacts')->insert($param);

    }
}