<?php

namespace Database\Seeders;

use App\Models\Machine;
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
        $this->call([
            MaquinasSeeder::class
            //ExemploSeeder::class
        ]);

        Machine::factory()->count(50)->create();
    }
}
