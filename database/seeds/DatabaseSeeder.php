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
        $this->call(SubjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
