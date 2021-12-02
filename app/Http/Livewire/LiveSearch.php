<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LiveSearch extends Component
{
    public $searchTerm = '';
    public $searchLocality;
    public $doctors;

    public $data;

    public function render()
    {
        if (!empty($this->searchTerm) && empty($this->searchLocality)) {

            $this->doctors =
                Doctor::with('department', 'services', 'locality')
                ->when($this->searchTerm, function ($query) {
                    $query->orWhere('name', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhere('extra_services', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%');
                    $query->orWhereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%');
                })
                ->orderBy('locality_id', 'DESC')
                ->get();
        } elseif (empty($this->searchTerm) && !empty($this->searchLocality)) {

            $this->doctors =
                Doctor::with('department', 'services', 'locality')
                ->when($this->searchLocality, function ($query) {
                    $query->where('locality_id', $this->searchLocality);
                })
                ->orderBy('name', 'ASC')
                ->get();
        } elseif (!empty($this->searchTerm) && !empty($this->searchLocality)) {

            $data0 = Doctor::with('department', 'services', 'locality')
                ->where('locality_id', $this->searchLocality)
                ->where('qualification', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data1 = Doctor::with('department', 'services', 'locality')
                ->where('locality_id', $this->searchLocality)
                ->where('name', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data2 = Doctor::with('department', 'services', 'locality')
                ->where('locality_id', $this->searchLocality)
                ->where('extra_services', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data3 = Doctor::with('department', 'services', 'locality')
                ->where('locality_id', $this->searchLocality)
                ->whereRelation('department', 'title', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $data4 = Doctor::with('department', 'services', 'locality')
                ->where('locality_id', $this->searchLocality)
                ->whereRelation('services', 'titles', 'LIKE', '%' . $this->searchTerm . '%')
                ->orderBy('locality_id', 'DESC')
                ->orderBy('name', 'ASC')
                ->get();

            $this->doctors = $data0->merge($data1)->merge($data2)->merge($data3)->merge($data4);
        } else {

            $this->doctors = Doctor::with('department', 'services', 'locality')->take(9)->get();
        }

        $locations = Doctor::with('locality')->groupBy('locality_id')->get('locality_id');

        return view('livewire.live-search', compact('locations'));
    }
}
