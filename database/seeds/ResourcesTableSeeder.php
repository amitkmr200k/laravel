<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            ['id' => '1','resource' => 'notification'],
            ['id' => '2','resource' => 'assignment']
        ]);
    }
}
