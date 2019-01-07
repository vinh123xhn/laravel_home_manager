<?php

use Illuminate\Database\Seeder;

class OrderStatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_status')->insert([
            ['name' => 'Đang chờ duyệt'],
            ['name' => 'Đơn hàng thành công'],
            ['name' => 'Sắp hết hạn'],
            ['name' => 'Đã hết hạn'],
        ]);
    }
}
