<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = Permission::create(['name' => 'users', 'display_name' => 'Lietotāji']);
        $Wallet = Permission::create(['name' => 'wallet', 'display_name' => 'Maciņs']);
        $Bio = Permission::create(['name' => 'bio', 'display_name' => 'Biogrāfija']);
        $Doc = Permission::create(['name' => 'doc', 'display_name' => 'Dokumenti']);

        $admin = Role::create(['name' => 'admin', 'display_name' => 'Administrātors']);
        $righthand = Role::create(['name' => 'righthand', 'display_name' => 'Labā roka']);
        $moderator = Role::create(['name' => 'moderator', 'display_name' => 'Moderātors']);
        $immortal = Role::create(['name' => 'immortal', 'display_name' => 'Nemirstīgais']);
        $mortal = Role::create(['name' => 'mortal', 'display_name' => 'Mirstīgais']);

    }
}
