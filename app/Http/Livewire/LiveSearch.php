<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class LiveSearch extends Component
{
    public $searchTerm = '';
    public $searchLocality;
    public $doctors;

    public $data;

    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->doctors =
                Doctor::with('department', 'services')
                ->where([
                    [function ($query) {
                        $query->orWhere('name', 'LIKE', $this->searchTerm)->orWhere('extra_services', 'LIKE', $this->searchTerm)->get();
                    }]
                ])
                ->orWhere('locality_id', '=', $this->searchLocality)
                ->orWhereRelation('department', 'title', 'LIKE', $this->searchTerm)
                ->orWhereRelation('services', 'titles', 'LIKE', $this->searchTerm)
                ->get();
        } else {
            $this->doctors =
                Doctor::with('department', 'services')
                ->where([
                    [function ($query) {
                        $query->orWhere('name', 'LIKE', '%' . $this->searchTerm . '%')->orWhere('extra_services', 'LIKE', '%' . $this->searchTerm . '%')->get();
                    }]
                ])
                ->orWhere('locality_id', '=', $this->searchLocality)
                ->orWhereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%')
                ->orWhereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%')
                ->get();
        }

        $locations = Doctor::with('locality')->groupBy('locality_id')->get('locality_id');

        return view('livewire.live-search', compact('locations'));
    }
}
