<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->insert([
            ['id' => '1','operation' => 'Create'],
            ['id' => '2','operation' => 'Read'],
            ['id' => '3','operation' => 'Update'],
            ['id' => '4','operation' => 'Delete'],
        ]);
    }
}
