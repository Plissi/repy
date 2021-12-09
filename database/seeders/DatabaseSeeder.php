<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('password');
        $user->role = 2;
        $user->save();

        $bank = new Bank();
        $bank -> name = 'bicec';
        $bank -> monetique = 1;
        $bank -> paywallet = 1;
        $bank -> contentieux = 1;
        $bank -> flux = 1;
        $bank ->save();
    }
}
