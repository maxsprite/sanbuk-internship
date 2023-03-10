<?php

namespace App\Http\Livewire\Experience;

use App\Models\TripType;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class SomeFilter extends ModalComponent
{
    public $items = [];
    public $selected = [];

    public function mount()
    {
        $this->items = TripType::all();
        $filter = request()->query('filter');

        ray('filter', request());

        if ($filter !== null && in_array('tripType', $filter)) {
            $this->selected = $filter['tripType'];
            ray('selected', $this->selected);
        }
    }

    public function render()
    {
        return view('livewire.experience.some-filter');
    }

    public function setSelected($value)
    {
        if (in_array($value, $this->selected) === false) {
            $this->selected[] = $value;
        }

        ray('$this->selected', $this->selected);
    }
}
