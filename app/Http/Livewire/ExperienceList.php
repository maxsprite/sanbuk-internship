<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ExperienceList extends Component
{
    public $experiences = [];
    public $search = null;
    public $filter = null;

    protected $queryString = ['search', 'filter'];

    protected $listeners = [
        'searchEvent' => 'searchListener',
        'filterEvent' => 'filterListener',
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

    public function filterListener($type, $value)
    {
        $this->emit('closeModal');
        $this->filter[$type] = $value;
        ray($this->filter);
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

        if ($this->filter !== null) {
            foreach ($this->filter as $key => $values) {
                $experiences->whereHas($key, function (Builder $query) use ($values) {
                    return $query->whereIn('id', $values);
                });
            }
        }

        $this->experiences = $experiences->get();

        return $this->experiences;
    }
}
