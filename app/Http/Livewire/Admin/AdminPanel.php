<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class AdminPanel extends Component
{

    public function mount()
    {
        // get unanswered contacts
        $this->emit('showUnanswered');
    }

    public function showAnswered()
    {
        // change contact table component variable
        $this->emit('showAnswered');
    }

    public function showUnanswered()
    {
        // change contact table component variable
        $this->emit('showUnanswered');
    }

    public function render()
    {
        return view('livewire.admin.admin-panel');
    }
}
