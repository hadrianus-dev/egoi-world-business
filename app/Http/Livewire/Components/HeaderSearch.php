<?php

namespace App\Http\Livewire\Components;

use Domain\Enterprise\Models\Enterprise;
use Livewire\Component;
use Domain\Service\Models\Service;

class HeaderSearch extends Component
{
        
    public $serviceResults;
    public $searchWords;
    public $enterprise;

    public function mount(Enterprise $enterprise): void
    {
        # code...
    }

    public function render()
    {
        if($this->searchWords){
            $this->serviceResults = Service::where([['published', true],['title', 'like', '%'.$this->searchWords.'%']])->get();
        }

        return view('livewire.components.header-search');
    }
}
