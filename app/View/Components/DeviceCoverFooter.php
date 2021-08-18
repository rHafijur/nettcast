<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeviceCoverFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $device;
    public function __construct($device)
    {
        $this->device=$device;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.device-cover-footer');
    }
}
