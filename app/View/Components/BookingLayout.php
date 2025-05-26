<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BookingLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.booking-layout');
    }
}
