<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('division')->insert([
            ['name' => 'phòng kế toán'],
            ['name' => 'phòng kĩ thuật'],
            ['name' => 'phòng bảo hành'],
            ['name' => 'phòng bán hàng'],
        ]);
    }
}
