<?php

namespace App\View\Components\Forms\Buttons;

use Illuminate\View\Component;

class DefaultButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title = 'Button',
        public string|bool $type = false,
        public string $class = '',
        public bool $disabled = false,
        public string $alpineDirectives = ''
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.buttons.default-button');
    }
}
