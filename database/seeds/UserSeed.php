<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'System Admin',
            'email' => 'sys@admin.com',
            'password' => bcrypt('secrect')
        ]);
        $user->assignRole('administrator');

    }
}
