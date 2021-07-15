<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annonce;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Annonce::factory()
        ->count(10)
        ->create();
    }
}
