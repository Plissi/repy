<?php

namespace App\Http\Livewire\Banks;

use Livewire\Component;
use App\Models\Bank;

class Add extends Component
{
    public $name='';
    public $monetique; 
    public $paywallet; 
    public $contentieux;
    public $flux;

    protected $rules = [
        'name' => 'required',
        'monetique' => 'required',
        'paywallet' => 'required',
        'contentieux' => 'required',
        'flux' => 'required',
    ];

    public function submit()
    {
        dd($this);
        $this->validate();

        Bank::create([
            'name' => $this -> name,
            'monetique' => $this -> monetique,
            'paywallet' => $this -> paywallet,
            'contentieux' => $this -> contentieux,
            'integration-flux' => $this -> flux,
        ]);

        return redirect(route('banks.index'));
    }

    public function render()
    {
        return view('livewire.banks.add');
    }
}
