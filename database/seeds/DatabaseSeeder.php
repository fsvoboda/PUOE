<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(EventTypesTableSeeder::class);
        $this->call(EventsTableSeeder::class);

        $this->call(PhotoTypesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);

        $this->call(ParamsTableSeeder::class);

    }
}
