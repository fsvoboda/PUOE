<?php

use App\Models\Event;
use App\Models\EventType;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('events')->delete();
        Event::truncate();
        Event::create([
            'name'=>'Mariage de '.User::where('username','ChristineJules')->first()->name,
            'date'=>Date::now(),
            'user_id'=>User::where('username','ChristineJules')->first()->id,
            'slug'=>'mariage-christine-jules',
            'event_type_id'=>EventType::where('name','mariage')->first()->id,
        ]);
        Event::create([
            'name'=>'Mariage de '.User::where('username','JakieMichel')->first()->name,
            'date'=>Date::now(),
            'user_id'=>User::where('username','JakieMichel')->first()->id,
            'slug'=>'mariage-jackie-michel',
            'event_type_id'=>EventType::where('name','mariage')->first()->id,
        ]);

        Event::create([
            'name'=>'Bapteme du gosse de '.User::where('username','JakieMichel')->first()->name,
            'date'=>Date::now(),
            'user_id'=>User::where('username','JakieMichel')->first()->id,
            'slug'=>'bapteme-jackie-michel',
            'event_type_id'=>EventType::where('name','bapteme')->first()->id,
        ]);
    }
}
