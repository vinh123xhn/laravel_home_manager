<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theme')->insert([
            ['name' => 'Không đăng ký được dịch vụ'],
            ['name' => 'Hosting'],
            ['name' => 'Lỗi bảo mật'],
            ['name' => 'Website chậm'],
        ]);
    }
}
