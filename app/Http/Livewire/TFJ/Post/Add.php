<?php

namespace App\Http\Livewire\Tfj\Post;

use App\Models\eod_report;
use App\Models\PostTFJ;
use Livewire\Component;

class Add extends Component
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

    protected $rules = [
        "sauve1" => ['required'],
        "sauve2" => ['required', 'after_or_equal:sauve1'],
        "sauve3" => ['nullable'],
        "sauvel1" => ['required'],
        "sauvel2" => ['required', 'after_or_equal:sauvel1'],
        "sauvel3" => ['nullable'],
        "site1" => ['required'],
        "site2" => ['required', 'after_or_equal:site1'],
        "site3" => ['nullable'],
        "sldf1" => ['nullable'],
        "sldf2" => ['nullable', 'required_with:sldf1', 'after_or_equal:sldf1'],
        "sldf3" => ['nullable'],
        "mon1" => ['required'],
        "mon2" => ['required', 'after_or_equal:mon1'],
        "mon3" => ['nullable'],
        "info1" => ['required'],
        "info2" => ['required', 'after_or_equal:info1'],
        "info3" => ['nullable'],
        "delta1" => ['required'],
        "delta2" => ['required', 'after_or_equal:delta1'],
        "delta3" => ['nullable'],
        "portail1" => ['required'],
        "portail2" => ['required', 'after_or_equal:portail1'],
        "portail3" => ['nullable'],
    ];

    public function mount(eod_report $report)
    {
        $this -> report = $report;
    }

    public function submit()
    {
        $this -> validate();

        PostTFJ::upsert([
            [
                'tache' => 'Sauvegarde RMAN',
                'debut' => $this -> sauve1,
                'fin' => $this -> sauve2,
                'observation' => $this -> sauve3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Sauvegarde Logique',
                'debut' => $this -> sauvel1,
                'fin' => $this -> sauvel2,
                'observation' => $this -> sauvel3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Ouverture du Site',
                'debut' => $this -> site1,
                'fin' => $this -> site2,
                'observation' => $this -> site3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Solde Monétique',
                'debut' => $this -> mon1,
                'fin' => $this -> mon2,
                'observation' => $this -> mon3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Disponibilité Infocentre',
                'debut' => $this -> info1,
                'fin' => $this -> info2,
                'observation' => $this -> info3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Disponibilité Amplitude',
                'debut' => $this -> delta1,
                'fin' => $this -> delta2,
                'observation' => $this -> delta3,
                'eod_reports_id' => $this -> report -> id
            ],[
                'tache' => 'Disponibilité Portail',
                'debut' => $this -> portail1,
                'fin' => $this -> portail2,
                'observation' => $this -> portail3,
                'eod_reports_id' => $this -> report -> id
            ],
        ], ['tache', 'eod_reports_id']);

        if ($this -> sldf1) {
            PostTFJ::create([
                'tache' => 'Soldes Fusionnés',
                'debut' => $this -> sldf1,
                'fin' => $this -> sldf2,
                'observation' => $this -> sldf3,
                'eod_reports_id' => $this -> report -> id
            ]);
        }

        return redirect(route('reports.edit', [
            'eod_report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.tfj.post.add');
    }
}
