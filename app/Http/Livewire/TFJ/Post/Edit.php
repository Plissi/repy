<?php

namespace App\Http\Livewire\Tfj\Post;

use App\Models\eod_report;
use Livewire\Component;

class Edit extends Component
{
    public $sauve1;
    public $sauve2;
    public $sauve3;
    public $sauvel1;
    public $sauvel2;
    public $sauvel3;
    public $site1;
    public $site2;
    public $site3;
    public $sldf1;
    public $sldf2;
    public $sldf3;
    public $mon1;
    public $mon2;
    public $mon3;
    public $info1;
    public $info2;
    public $info3;
    public $delta1;
    public $delta2;
    public $delta3;
    public $portail1;
    public $portail2;
    public $portail3;

    public $report;

    public $sauve;
    public $sauvel;
    public $site;
    public $sldf;
    public $mon;
    public $info;
    public $delta;
    public $portail;

    public function mount(eod_report $report)
    {
        $this -> report = $report;
        
        $this -> sauve = $this -> report -> post_tfj() -> where('tache', 'Sauvegarde RMAN') ->first();
        $this -> sauvel = $this -> report -> post_tfj() -> where('tache', 'Sauvegarde Logique') ->first();
        $this -> site = $this -> report -> post_tfj() -> where('tache', 'Ouverture du Site') ->first();
        $this -> sldf = $this -> report -> post_tfj() -> where('tache', 'Soldes Fusionnés') ->first();
        $this -> mon = $this -> report -> post_tfj() -> where('tache', 'Solde Monétique') ->first();
        $this -> info = $this -> report -> post_tfj() -> where('tache', 'Disponibilité Infocentre') ->first();
        $this -> delta = $this -> report -> post_tfj() -> where('tache', 'Disponibilité Amplitude') ->first();
        $this -> portail = $this -> report -> post_tfj() -> where('tache', 'Disponibilité Portail') ->first();

        $this -> sauve1 = $this -> sauve -> debut;
        $this -> sauve2 = $this -> sauve -> fin;
        $this -> sauve3 = $this -> sauve -> observation;
        $this -> sauvel1 = $this -> sauvel -> debut;
        $this -> sauvel2 = $this -> sauvel -> fin;
        $this -> sauvel3 = $this -> sauvel -> observation;
        $this -> site1 = $this -> site -> debut;
        $this -> site2 = $this -> site -> fin;
        $this -> site3 = $this -> site -> observation;

        if ($this -> sldf != null) {
            $this -> sldf1 = $this -> sldf -> debut;
            $this -> sldf2 = $this -> sldf -> fin;
            $this -> sldf3 = $this -> sldf -> observation;
        }

        $this -> mon1 = $this -> mon -> debut;
        $this -> mon2 = $this -> mon -> fin;
        $this -> mon3 = $this -> mon -> observation;
        $this -> info1 = $this -> info -> debut;
        $this -> info2 = $this -> info -> fin;
        $this -> info3 = $this -> info -> observation;
        $this -> delta1 = $this -> delta -> debut;
        $this -> delta2 = $this -> delta -> fin;
        $this -> delta3 = $this -> delta -> observation;
        $this -> portail1 = $this -> portail -> debut;
        $this -> portail2 = $this -> portail -> fin;
        $this -> portail3 = $this -> portail -> observation;

    }

    protected $rules = [
        "mon1" => ['required'],
        "mon2" => ['required', 'after_or_equal:mon1'],
        "mon3" => ['nullable'],
        "info1" => ['required'],
        "info2" => ['required', 'after_or_equal:info1'],
        "info3" => ['nullable'],
        "sldf1" => ['nullable'],
        "sldf2" => ['nullable', 'required_with:sldf1', 'after_or_equal:sldf1'],
        "sldf3" => ['nullable'],
        "delta1" => ['required'],
        "delta2" => ['required', 'after_or_equal:delta1'],
        "delta3" => ['nullable'],
        "portail1" => ['required'],
        "portail2" => ['required', 'after_or_equal:portail1'],
        "portail3" => ['nullable'],
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
        
        $this -> site -> update([
            'debut' => $this -> site1,
            'fin' => $this -> site2,
            'observation' => $this -> site3,
        ]);
        
        if ($this->sldf) {
            $this -> sldf -> update([
                'debut' => $this -> sldf1,
                'fin' => $this -> sldf2,
                'observation' => $this -> sldf3,
            ]);
        }

        $this -> mon -> update([
            'debut' => $this -> mon1,
            'fin' => $this -> mon2,
            'observation' => $this -> mon3, 
        ]);
        
        $this -> info -> update([
            'debut' => $this -> info1,
            'fin' => $this -> info2,
            'observation' => $this -> info3,
        ]);
        
        $this -> delta -> update([
            'debut' => $this -> delta1,
            'fin' => $this -> delta2,
            'observation' => $this -> delta3,
        ]);
        
        $this -> portail -> update([
            'debut' => $this -> portail1,
            'fin' => $this -> portail2,
            'observation' => $this -> portail3,
        ]);

        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.post.edit');
    }
}
