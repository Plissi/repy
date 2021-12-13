<?php

namespace App\Http\Livewire\Tfj\Synthesis;

use App\Models\eod_report;
use Livewire\Component;
use App\Models\syntheses_tfj;

class Add extends Component
{
    public $debut;
    public $fin;
    public $duree;
    public $evenements;
    public $mouvements;
    public $transfert_sda;
    public $report;
    
    public function mount(eod_report $report)
    {
        $this -> report = $report;
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

        syntheses_tfj::create([
            'debut' => $this -> debut,
            'fin' => $this -> fin,
            'duree' => $this -> duree,
            'evenements' => $this -> evenements,
            'mouvements' => $this -> mouvements,
            'transfert_sda' => $this -> transfert_sda,
            'eod_reports_id' => $this -> report -> id
        ]);

        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.synthesis.add');
    }
}
