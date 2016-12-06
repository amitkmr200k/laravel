<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'amitkmr200k',
            'first_name' => 'Amit',
            'last_name' => 'Kumar',
            'is_admin' => '1',
            'is_active' => '1',
            'role_id' => '3',
            'email' => 'amitkmr200k@gmail.com',
            'password' => bcrypt('mindfire'),
        ]);

    	//factory(App\Model\users::class, 1)->create();
    }
}
