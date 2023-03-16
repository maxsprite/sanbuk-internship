<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class SignUp extends Component
{
    public string $title = 'Sign Up1';
    public string|null $first_name = null;
    public string|null $last_name = null;
    public string|null $phone = null;
    public string|null $email = null;
    public bool $isButtonDisabled = true;

    public bool|null $isChecked = false;

    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'phone' => 'required|min:6',
        'email' => 'email|nullable',
    ];

    public function updated($name, $value)
    {
        if (strlen($value) <= 0) {
            $this->$name = null;
        }

        if (
            $this->first_name !== null
            && $this->last_name !== null
            && $this->phone !== null
        ) {
            $this->isButtonDisabled = false;
        } else {
            $this->isButtonDisabled = true;
        }
    }

    public function render()
    {
        return view('livewire.users.sign-up');
    }

    public function submit()
    {
        ray('signup sumbit prevent');
//        $this->isChecked = !$this->isChecked;
        $this->validate();
        ray('signup sumbit validated');
    }
}
