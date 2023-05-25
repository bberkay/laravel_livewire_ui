<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Message;
use App\Models\Contact;

class AdminPanel extends Component
{
    public $data;
    public $show_answered = false;  
    public $show_unanswered = true;

    public function showAnswered()
    {
        // show answered messages
        $this->show_answered = true;
        $this->show_unanswered = false;

        // get all messages
        $this->data = Message::all()->sortByDesc('created_at')->take(10);
    }

    public function showUnanswered()
    {
        // show unanswered messages
        $this->show_answered = false;
        $this->show_unanswered = true;

        // get all contacts that are not answered
        $this->data = Contact::where('answered', false)->get()->sortByDesc('created_at')->take(10);
    }

    public function render()
    {
        return view('livewire.admin.admin-panel', [
            'data' => $this->data,
            'show_answered' => $this->show_answered,
            'show_unanswered' => $this->show_unanswered
        ]);
    }
}
