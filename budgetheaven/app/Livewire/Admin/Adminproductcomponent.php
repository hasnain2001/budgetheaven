<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Features\SupportPagination\PaginationUrl;
use Livewire\WithPagination;
class Adminproductcomponent extends Component
{
    use withPagination;
    public function render()
    {
       
        return view('livewire.admin.adminproductcomponent');
    }
}
