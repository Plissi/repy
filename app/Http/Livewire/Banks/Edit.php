<?php

namespace App\Http\Livewire\Banks;

use Livewire\Component;
use App\Models\Bank;

class Edit extends Component
{
    public $bank;
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
 
    public function mount() {
        $this -> name = $this -> bank -> name;
        $this -> monetique = $this -> bank -> monetique; 
        $this -> paywallet = $this -> bank -> paywallet; 
        $this -> contentieux = $this -> bank -> contentieux;
        $this -> flux = $this -> bank['integration-flux'];
    }

    public function submit()
    {
        $this->validate();

        $this -> bank -> update([
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
        return view('livewire.banks.edit', [
            'bank' => $this -> bank
        ]);
    }
}
