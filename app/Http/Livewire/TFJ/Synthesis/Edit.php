<?php

namespace App\Http\Livewire\Tfj\Synthesis;

use Livewire\Component;
use App\Models\eod_report;
use App\Models\syntheses_tfj;

class Edit extends Component
{
    public $debut;
    public $fin;
    public $duree;
    public $evenements;
    public $mouvements;
    public $transfert_sda;
    public $report;
    public $synthesis;
    
    public function mount(syntheses_tfj $synthesis)
    {
        $this -> debut = $synthesis -> debut;
        $this -> fin = $synthesis -> fin;
        $this -> duree = $synthesis -> duree;
        $this -> evenements = $synthesis -> evenements;
        $this -> mouvements = $synthesis -> mouvements;
        $this -> transfert_sda = $synthesis -> transfert_sda;
        $this -> report = $synthesis -> eod_reports_id;
    }

    protected $rules = [
        'debut' => 'required',
        'fin' => 'required | after:debut',
        'duree' => 'required',
        'evenements' => 'required',
        'mouvements' => 'required',
        'transfert_sda' => 'required',
    ];

    public function submit()
    {
        $this ->validate();

        $this -> synthesis -> update([
            'debut' => $this -> debut,
            'fin' => $this -> fin,
            'duree' => $this -> duree,
            'evenements' => $this -> evenements,
            'mouvements' => $this -> mouvements,
            'transfert_sda' => $this -> transfert_sda
        ]);
        
        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.synthesis.edit');
    }
}
