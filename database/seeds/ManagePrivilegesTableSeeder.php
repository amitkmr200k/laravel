<?php

use Illuminate\Database\Seeder;

class ManagePrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manage_privileges')->insert([
            ['role_id' => '1', 'resource_id' => '1', 'action_id' => '2'],
            ['role_id' => '1', 'resource_id' => '2', 'action_id' => '2'],
            ['role_id' => '2', 'resource_id' => '1', 'action_id' => '1'],
            ['role_id' => '2', 'resource_id' => '1', 'action_id' => '2'],
            ['role_id' => '2', 'resource_id' => '1', 'action_id' => '3'],
            ['role_id' => '2', 'resource_id' => '2', 'action_id' => '1'],
            ['role_id' => '2', 'resource_id' => '2', 'action_id' => '2'],
            ['role_id' => '2', 'resource_id' => '2', 'action_id' => '3'],
            ['role_id' => '3', 'resource_id' => '1', 'action_id' => '1'],
            ['role_id' => '3', 'resource_id' => '1', 'action_id' => '2'],
            ['role_id' => '3', 'resource_id' => '1', 'action_id' => '3'],
            ['role_id' => '3', 'resource_id' => '1', 'action_id' => '4'],
            ['role_id' => '3', 'resource_id' => '2', 'action_id' => '1'],
            ['role_id' => '3', 'resource_id' => '2', 'action_id' => '2'],
            ['role_id' => '3', 'resource_id' => '2', 'action_id' => '3'],
            ['role_id' => '3', 'resource_id' => '2', 'action_id' => '4'],
        ]);
    }
}
