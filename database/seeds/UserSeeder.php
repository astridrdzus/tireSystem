<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oscar Monsreal',
            'email'=> 'oscar@example.com',
            'password' => bcrypt('secretodeamor')
        ]);
        User::create([
            'name' => 'Astrid Rodriguez',
            'email'=> 'astrid@example.com',
            'password' => bcrypt('secretodeamor')
        ]);
    }
}
