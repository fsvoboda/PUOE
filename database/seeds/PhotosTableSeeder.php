<?php

use App\Models\Event;
use App\Models\Photo;
use App\Models\PhotoType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('photos')->delete();
        Photo::truncate();
        $faker = Faker\Factory::create('fr_FR');

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Christine et Jules')->first()->id,
            'photo_type_id'=>PhotoType::where('name','remerciement')->first()->id,
            'private'=>true,
            'num_order'=>1
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Christine et Jules')->first()->id,
            'photo_type_id'=>PhotoType::where('name','remerciement')->first()->id,
            'private'=>true,
            'num_order'=>2
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Christine et Jules')->first()->id,
            'photo_type_id'=>PhotoType::where('name','remerciement')->first()->id,
            'private'=>true,
            'num_order'=>3
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Christine et Jules')->first()->id,
            'photo_type_id'=>PhotoType::where('name','agrandissement')->first()->id,
            'private'=>true,
            'num_order'=>1
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Christine et Jules')->first()->id,
            'photo_type_id'=>PhotoType::where('name','agrandissement')->first()->id,
            'private'=>true,
            'num_order'=>2
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Jakie et Michel')->first()->id,
        ]);

        Photo::create([
            'name'=>$faker->lastName(),
            'event_id'=>Event::where('name','Mariage de Jakie et Michel')->first()->id,
        ]);

    }
}
