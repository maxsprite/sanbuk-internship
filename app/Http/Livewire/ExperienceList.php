<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Livewire\Component;

class ExperienceList extends Component
{
    public $experiences = [];
    public $search = null;

    protected $queryString = ['search'];

    protected $listeners = [
        'searchEvent' => 'searchListener',
    ];

    public function updated($name, $value)
    {
        if ($name === 'search') {
            if (empty($value)) {
                $this->search = null;
            }

            $this->emit('searchEvent', $value);
        }
    }

    public function searchListener($value)
    {
        $this->search = $value;
        $this->initItems();
    }

    public function mount()
    {
        $this->initItems();
    }

    public function render()
    {
        return view('livewire.experience-list');
    }

    public function initItems()
    {
        $experiences = Experience::query();

        if ($this->search !== null) {
            $experiences->where('name', 'like', '%'. $this->search .'%');
        }

        $this->experiences = $experiences->get();

        return $this->experiences;
    }
}
