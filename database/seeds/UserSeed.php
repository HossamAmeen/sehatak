<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\User::create([
            'full_name'=> 'admin',
            'email' => 'hosamameen948@gmail.com',
            'password' => bcrypt('admin'),
            'user_name' => "admin",
            'phone' => "01010079798",
            'user_id' => "1",
            'role' => 1,
        ]);  
    }
    
}
