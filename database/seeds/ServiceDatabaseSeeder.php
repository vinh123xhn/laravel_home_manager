<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            ['name' => 'Dịch vụ Web'],
            ['name' => 'Quảng Cáo Website'],
            ['name' => 'Thiết kế đồ họa'],
            ['name' => 'Thiết kế phần mềm'],
        ]);
    }
}
