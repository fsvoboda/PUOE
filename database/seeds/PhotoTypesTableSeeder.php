<?php

use App\Models\PhotoType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('photo_types')->delete();
        PhotoType::truncate();
        PhotoType::create(['name'=>'remerciement','description'=>'Remerciement']);
        PhotoType::create(['name'=>'agrandissement','description'=>'Agrandissement']);
        PhotoType::create(['name'=>'album','description'=>'Album']);
    }
}
