<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Developer;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        Developer::factory(10)->create();
    }
}
