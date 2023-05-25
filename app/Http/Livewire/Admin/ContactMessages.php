<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ContactMessages extends Component
{

    public function __construct(public $data)
    {
        //
    }

    public function render()
    {
        return view('livewire.admin.contact-messages');
    }
}
