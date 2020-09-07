<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'id' => 1234,
            'email'    => 'admin@talavija.lv',
            'password' => Hash::make('admin'),
            'first_name' => 'Māris',
            'last_name' => 'Danne',
            'phone' => '+37122140077',
            'status_id' => 1,
            'bilance' => 0,
        ]);
    }
}
