<?php

namespace App\Http\Livewire\Reports;

use App\Models\Bank;
use App\Models\eod_report;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Add extends Component
{
    public $date;
    public $bank;

    protected $messages = [
        'date.unique' => 'Ce bulletin exite déjà',
    ];

    protected function rules()
    {
        return [
            'date' => ['required', 'date', 'unique:eod_reports,date,NULL,id,bank_id,'.$this->bank],
            'bank' => ['required'],
        ];
    }
    
    public function submit()
    {
        $this -> validate();

        try {
            $eod_report = eod_report::create([
                'date' => $this -> date,
                'bank_id' => $this -> bank,
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                dd($e);
            }
        }

        return redirect(route('reports.edit', [
            'eod_report' => $eod_report
        ]));
    }

    public function render()
    {
        return view('livewire.reports.add', [
            'banks' => Bank::all()
        ]);
    }
}
