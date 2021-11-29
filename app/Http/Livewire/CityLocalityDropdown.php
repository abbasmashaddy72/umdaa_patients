<?php

namespace App\Http\Livewire;

use App\Models\State;
use Livewire\Component;

class CityLocalityDropdown extends Component
{
    public $state_id;
    public $city_id;
    public $locality_id;

    public function render()
    {
        $states = State::get(['name', 'id']);

        return view('livewire.city-locality-dropdown', compact('states'));
    }
}
