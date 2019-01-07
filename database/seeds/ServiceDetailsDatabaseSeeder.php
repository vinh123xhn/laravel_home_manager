<?php

use Illuminate\Database\Seeder;

class ServiceDetailsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_details')->insert([
            [
                'service_id' => '1',
                'name' => 'Tên miền'
            ],[
                'service_id' => '1',
                'name' => 'Server Hosting'
            ],[
                'service_id' => '1',
                'name' => 'SSL và Bảo mật'
            ],[
                'service_id' => '1',
                'name' => 'CDN và DDos'
            ],[
                'service_id' => '1',
                'name' => 'Thiết kế Website'
            ],[
                'service_id' => '1',
                'name' => 'Website miễn phí'
            ],[
                'service_id' => '2',
                'name' => 'Dịch vụ Web'
            ],[
                'service_id' => '2',
                'name' => 'Quản trị Website'
            ],[
                'service_id' => '2',
                'name' => 'Google Ads/SEO'
            ],[
                'service_id' => '3',
                'name' => 'Thiết kế Logo'
            ],[
                'service_id' => '3',
                'name' => 'Thiết kế Banner'
            ],[
                'service_id' => '3',
                'name' => 'Thiết kế truyền thông'
            ],[
                'service_id' => '4',
                'name' => 'Thiết kế UI/UX'
            ],[
                'service_id' => '4',
                'name' => 'Phần mềm doanh nghiệp'
            ],[
                'service_id' => '4',
                'name' => 'Chuyển giao phần mềm'
            ],[
                'service_id' => '4',
                'name' => 'Ứng dụng di động'
            ],
        ]);
    }
}
