<?php

namespace Database\Seeders;

use App\Models\Flux;
use Illuminate\Database\Seeder;

class FluxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flux::create([
            'name' => 'REGUL',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'OrangeM',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'MUTUELLE',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'COFACE',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'ACHATS',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'IMMODOT',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'IMMOACQ',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'IMMOCES',
            'bank_id' => 1
        ]);
        
        Flux::create([
            'name' => 'Paie BICEC',
            'bank_id' => 1
        ]);
    }
}
