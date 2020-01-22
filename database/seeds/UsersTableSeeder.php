<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $faker = Faker\Factory::create('fr_FR');

        //DB::table('users')->delete();
        User::truncate();
        User::create([
            'name'=>'Franck SVOBODA',
            'username'=>'fsvoboda',
            'email'=>'franck@pourunouieternel.fr',
            'phone'=>$faker->phoneNumber(),
            'adress'=>$faker->address(),
            'password'=>Hash::make('Isabelle62'),
        ])->roles()->attach(Role::where('name','admin')->first());
        
        User::create([
            'name'=>'Christophe BEDU',
            'username'=>'cbedu',
            'email'=>'atomik@pourunouieternel.fr',
            'password'=>Hash::make('Atomik62'),
            'phone'=>$faker->phoneNumber(),
            'adress'=>$faker->address(),
            'description'=>$faker->text($maxNbChars = 2000),
        ])->roles()->attach(Role::where('name','partner')->first());

        User::create([
            'name'=>'Christine et Jules',
            'username'=>'ChristineJules',
            'email'=>$faker->email(),
            'password'=>Hash::make('client'),
            'phone'=>$faker->phoneNumber(),
            'adress'=>$faker->address(),
        ])->roles()->attach(Role::where('name','client')->first());

        User::create([
            'name'=>'Jakie et Michel',
            'username'=>'JakieMichel',
            'email'=>$faker->email(),
            'password'=>Hash::make('client'),
            'phone'=>$faker->phoneNumber(),
            'adress'=>$faker->address(),
        ])->roles()->attach(Role::where('name','client')->first());

    }
}
