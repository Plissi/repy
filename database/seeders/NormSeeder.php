<?php

namespace Database\Seeders;

use App\Models\Norm;
use Illuminate\Database\Seeder;

class NormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Norm::create([
            'tache' => 'sauve_av_tfj',
            'heure' => '19:30',
            'bank_id' => 1
        ]);

        Norm::create([
            'tache' => 'debut_tfj',
            'heure' => '20:00',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'duree_tfj',
            'heure' => '03:30',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'open_site',
            'heure' => '07:30',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'test_infocentre',
            'heure' => '07:30',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'tranfert_sda',
            'heure' => '07:30',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'test_amplitude',
            'heure' => '06:30',
            'bank_id' => 1
        ]);
        /*
        Norm::create([
            'tache' => 'solde_av_tfj',
            'heure' => '19:30',
            'bank_id' => 1
        ]);
        
        Norm::create([
            'tache' => 'solde_ap_tfj',
            'heure' => '19:30',
            'bank_id' => 1
        ]);
        */
        Norm::create([
            'tache' => 'transfert_sms',
            'heure' => '06:30',
            'bank_id' => 1
        ]);
    }
}
