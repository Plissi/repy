<?php

namespace App\Http\Livewire\Tfj\Pre;

use App\Models\eod_report;
use App\Models\PreTFJ;
use Livewire\Component;

class Add extends Component
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

    public function mount(eod_report $report)
    {
        $this -> report = $report;
    }

    public function submit()
    {
        $this -> validate();

        PreTFJ::create([
            'tache' => 'Contentieux',
            'debut' => $this -> ctx1,
            'fin' => $this -> ctx2,
            'observation' => $this -> ctx3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Solde Monétique',
            'debut' => $this -> mon1,
            'fin' => $this -> mon2,
            'observation' => $this -> mon3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Génération Clients IWOMI',
            'debut' => $this -> clts1,
            'fin' => $this -> clts2,
            'observation' => $this -> clts3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Génération Solde IWOMI',
            'debut' => $this -> sld1,
            'fin' => $this -> sld2,
            'observation' => $this -> sld3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'TFJ Paywallet',
            'debut' => $this -> paywallet1,
            'fin' => $this -> paywallet2,
            'observation' => $this -> paywallet3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Fermeture Automatique des Caisses',
            'debut' => $this -> caisses1,
            'fin' => $this -> caisses2,
            'observation' => $this -> caisses3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Fermeture du Site',
            'debut' => $this -> site1,
            'fin' => $this -> site2,
            'observation' => $this -> site3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Sauvegarde RMAN',
            'debut' => $this -> sauve1,
            'fin' => $this -> sauve2,
            'observation' => $this -> sauve3,
            'eod_reports_id' => $this -> report -> id
        ]);

        PreTFJ::create([
            'tache' => 'Sauvegarde Logique',
            'debut' => $this -> sauvel1,
            'fin' => $this -> sauvel2,
            'observation' => $this -> sauvel3,
            'eod_reports_id' => $this -> report -> id
        ]);

        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.pre.add');
    }
}
