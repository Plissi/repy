<?php

namespace App\Http\Livewire\Tfj\Pre;

use App\Models\eod_report;
use App\Models\PreTFJ;
use Livewire\Component;

class Edit extends Component
{
    public $ctx1;
    public $ctx2;
    public $ctx3;
    public $mon1;
    public $mon2;
    public $mon3;
    public $clts1;
    public $clts2;
    public $clts3;
    public $sld1;
    public $sld2;
    public $sld3;
    public $paywallet1;
    public $paywallet2;
    public $paywallet3;
    public $caisses1;
    public $caisses2;
    public $caisses3;
    public $site1;
    public $site2;
    public $site3;
    public $sauve1;
    public $sauve2;
    public $sauve3;
    public $sauvel1;
    public $sauvel2;
    public $sauvel3;

    public $report;

    public $ctx;
    public $mon;
    public $clts;
    public $sld;
    public $paywallet;
    public $caisses;
    public $site;
    public $sauve;
    public $sauvel;

    public function mount(eod_report $report)
    {
        $this -> report = $report;
        
        $this -> ctx = $this -> report -> pre_tfj() -> where('tache', 'Contentieux') ->first();
        $this -> mon = $this -> report -> pre_tfj() -> where('tache', 'Solde Monétique') ->first();
        $this -> clts = $this -> report -> pre_tfj() -> where('tache', 'Génération Clients IWOMI') ->first();
        $this -> sld = $this -> report -> pre_tfj() -> where('tache', 'Génération Solde IWOMI') ->first();
        $this -> paywallet = $this -> report -> pre_tfj() -> where('tache', 'TFJ Paywallet') ->first();
        $this -> caisses = $this -> report -> pre_tfj() -> where('tache', 'Fermeture Automatique des Caisses') ->first();
        $this -> site = $this -> report -> pre_tfj() -> where('tache', 'Fermeture du Site') ->first();
        $this -> sauve = $this -> report -> pre_tfj() -> where('tache', 'Sauvegarde RMAN') ->first();
        $this -> sauvel = $this -> report -> pre_tfj() -> where('tache', 'Sauvegarde Logique') ->first();

        $this -> ctx1 = $this -> ctx -> debut;
        $this -> ctx2 = $this -> ctx -> fin;
        $this -> ctx3 = $this -> ctx -> observation;
        $this -> mon1 = $this -> mon -> debut;
        $this -> mon2 = $this -> mon -> fin;
        $this -> mon3 = $this -> mon -> observation;
        $this -> clts1 = $this -> clts -> debut;
        $this -> clts2 = $this -> clts -> fin;
        $this -> clts3 = $this -> clts -> observation;
        $this -> sld1 = $this -> sld -> debut;
        $this -> sld2 = $this -> sld -> fin;
        $this -> sld3 = $this -> sld -> observation;
        $this -> paywallet1 = $this -> paywallet -> debut;
        $this -> paywallet2 = $this -> paywallet -> fin;
        $this -> paywallet3 = $this -> paywallet -> observation;
        $this -> caisses1 = $this -> caisses -> debut;
        $this -> caisses2 = $this -> caisses -> fin;
        $this -> caisses3 = $this -> caisses -> observation;
        $this -> site1 = $this -> site -> debut;
        $this -> site2 = $this -> site -> fin;
        $this -> site3 = $this -> site -> observation;
        $this -> sauve1 = $this -> sauve -> debut;
        $this -> sauve2 = $this -> sauve -> fin;
        $this -> sauve3 = $this -> sauve -> observation;
        $this -> sauvel1 = $this -> sauvel -> debut;
        $this -> sauvel2 = $this -> sauvel -> fin;
        $this -> sauvel3 = $this -> sauvel -> observation;

    }

    protected $rules = [
        "ctx1" => ['required'],
        "ctx2" => ['required', 'after_or_equal:ctx1'],
        "ctx3" => ['nullable'],
        "mon1" => ['required'],
        "mon2" => ['required', 'after_or_equal:mon1'],
        "mon3" => ['nullable'],
        "clts1" => ['required'],
        "clts2" => ['required', 'after_or_equal:clts1'],
        "clts3" => ['nullable'],
        "sld1" => ['required'],
        "sld2" => ['required', 'after_or_equal:sld1'],
        "sld3" => ['nullable'],
        "paywallet1" => ['required'],
        "paywallet2" => ['required', 'after_or_equal:paywallet1'],
        "paywallet3" => ['nullable'],
        "caisses1" => ['required'],
        "caisses2" => ['required', 'after_or_equal:caisses1'],
        "caisses3" => ['nullable'],
        "site1" => ['required'],
        "site2" => ['required', 'after_or_equal:site1'],
        "site3" => ['nullable'],
        "sauve1" => ['required'],
        "sauve2" => ['required', 'after_or_equal:sauve1'],
        "sauve3" => ['nullable'],
        "sauvel1" => ['required'],
        "sauvel2" => ['required', 'after_or_equal:sauvel1'],
        "sauvel3" => ['nullable'],
    ];

    public function submit()
    {
        $this -> validate();

        $this -> ctx -> update([
            'debut' => $this -> ctx1,
            'fin' => $this -> ctx2,
            'observation' => $this -> ctx3,        
        ]);
        
        $this -> mon -> update([
            'debut' => $this -> mon1,
            'fin' => $this -> mon2,
            'observation' => $this -> mon3, 
        ]);
        
        $this -> clts -> update([
            'debut' => $this -> clts1,
            'fin' => $this -> clts2,
            'observation' => $this -> clts3,
        ]);
        
        $this -> sld -> update([
            'debut' => $this -> sld1,
            'fin' => $this -> sld2,
            'observation' => $this -> sld3,
        ]);
        
        $this -> paywallet -> update([
            'debut' => $this -> paywallet1,
            'fin' => $this -> paywallet2,
            'observation' => $this -> paywallet3,
        ]);
        
        $this -> caisses -> update([
            'debut' => $this -> caisses1,
            'fin' => $this -> caisses2,
            'observation' => $this -> caisses3,
        ]);
        
        $this -> site -> update([
            'debut' => $this -> site1,
            'fin' => $this -> site2,
            'observation' => $this -> site3,
        ]);
        
        $this -> sauve -> update([
            'debut' => $this -> sauve1,
            'fin' => $this -> sauve2,
            'observation' => $this -> sauve3,
        ]);

        $this -> sauvel -> update([
            'debut' => $this -> sauvel1,
            'fin' => $this -> sauvel2,
            'observation' => $this -> sauvel3,
        ]);

        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.pre.edit');
    }
}
