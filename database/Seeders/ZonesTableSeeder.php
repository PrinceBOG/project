<?php

use Illuminate\Database\Seeder;
use App\Domains\Timezone\Model\Timezone;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //factory(Timezone::class, 50)->create(); // Crée 50 enregistrements
        \App\Domains\Timezone\Model\Timezone::factory(50)->create();
    }
}
