<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DeveloperServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developer_services')->insert(array(
            [ 'developer_id' => 1, 'service_id' => 1, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 1, 'service_id' => 2, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 1, 'service_id' => 3, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 1, 'service_id' => 4, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 1, 'service_id' => 5, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 2, 'service_id' => 1, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 2, 'service_id' => 2, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 3, 'service_id' => 4, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 4, 'service_id' => 5, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
            [ 'developer_id' => 4, 'service_id' => 2, 'created_at' => '2021-04-12 13:46:47', 'updated_at' => '2021-04-12 13:46:47' ],
        ));
    }
}