<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Seeder;

class MaquinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Machine::create([
            'nome' => 'Plantadeira'
            //'coluna2' => 'teste'
        ]);
    }
}
