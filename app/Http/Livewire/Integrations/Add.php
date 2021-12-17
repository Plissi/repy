<?php

namespace App\Http\Livewire\Integrations;

use App\Models\Bank;
use App\Models\Integration;
use Livewire\Component;

class Add extends Component
{
    public $flux;
    public $mvts;
    public $list;
    public $report;

    public function mount($report)
    {
        $this -> list = Bank::find($report -> bank_id) -> flux;
        $this -> report = $report -> id;
    }

    public function rules()
    {
        return [
            'flux' => ['required'],
            'mvts' => ['required', 'numeric']
        ];
    }
    
    public function submit()
    {
        $this -> validate();
        //dd($this -> flux, $this -> report, $this -> mvts);
        Integration::create([
            'mouvements' => $this -> mvts,
            'eod_reports_id' => $this -> report,
            'flux_id' => $this -> flux
        ]);

        return redirect(route('integrations.index', [
            'report' => $this -> report
        ]));
    }

    public function render()
    {
        return view('livewire.integrations.add', [
            'list' =>$this -> list
        ]);
    }
}
