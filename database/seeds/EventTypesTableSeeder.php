<?php

use App\Models\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('event_types')->delete();
        EventType::truncate();
        EventType::create(['name'=>'mariage','description'=>'Mariage']);
        EventType::create(['name'=>'bapteme','description'=>'Bapteme']);
        EventType::create(['name'=>'shooting','description'=>'Shooting']);
        EventType::create(['name'=>'autre','description'=>'Autre']);
        
        

    }
}
