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
        DB::table('users')->insert(
            [
                'name' => 'Sam Wilkinson',
                'email' => 'samwilkinson96@mail.com',
                'password' => bcrypt('123456'),
            ]);
    }
}
