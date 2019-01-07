<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
         $this->call(DivisionDatabaseSeeder::class);
         $this->call(OrderStatusDatabaseSeeder::class);
         $this->call(ThemeDatabaseSeeder::class);
         $this->call(ServiceDatabaseSeeder::class);
         $this->call(ServiceDetailsDatabaseSeeder::class);
    }
}
