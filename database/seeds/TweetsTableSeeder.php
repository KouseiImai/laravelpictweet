<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'iga',
            'text' => '伊賀',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwS4eLdwT9cpsWxqT_sHYlrCXg2vh-BA-bQQ&usqp=CAU',
            'user_id' => 10,
        ];
        DB::table('tweets')->insert($param);

        $param = [
            'name' => 'iga',
            'text' => '伊賀',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwS4eLdwT9cpsWxqT_sHYlrCXg2vh-BA-bQQ&usqp=CAU',
            'user_id' => 10,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('tweets')->insert($param);

    }
}
