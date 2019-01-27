<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'name' => str_random('10'),
            'author' => str_random('7'),
            'type' => str_random('7'),
            'pdate' => '1945-03-01'
        ]);
    }
}
