<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('role_user')->delete();
        Role::truncate();
        //DB::table('roles')->delete();
        Role::create(['name'=>'admin','description'=>'Administrateur']);
        Role::create(['name'=>'partner','description'=>'Partenaire']);
        Role::create(['name'=>'client','description'=>'Client']);

    }
}
