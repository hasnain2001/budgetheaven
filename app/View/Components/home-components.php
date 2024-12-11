<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav');
    }
    public function cash(): View|Closure|string
    {
        return view('components.cashback');
    }
    public function footer(): View|Closure|string
    {
        return view('components.footer');
    }
    public function coupen(): View|Closure|string
    {
        return view('components.coupen');
    }
}
