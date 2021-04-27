<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "khaoula";
        $user->email = "sahnounekhaoula@gmail.com";
        $user->password = Hash::make('123456789');
        $user->role = "admin";
        $user->save();
    }
}
