<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('truncate table visitors');

        DB::table('visitors')->insert([
           'visitor' => 0,
            'download' => 0
        ]);
    }
}
