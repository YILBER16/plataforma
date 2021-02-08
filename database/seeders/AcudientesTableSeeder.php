<?php

namespace Database\Seeders;
use App\Models\Acudientes;

use Illuminate\Database\Seeder;

class AcudientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acudientes::factory(10)->create();
    }
}
