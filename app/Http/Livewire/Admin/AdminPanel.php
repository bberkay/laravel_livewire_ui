<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class AdminPanel extends Component
{
    public $data;
    public $show = 'unanswered';
    
    public function mount()
    {
        // get all messages
        $this->data = Contact::where('answered', false)->get()->sortByDesc('created_at')->take(10);
    }

    public function showAnswered()
    {
        // show answered messages
        $this->show = "answered";

        // get all contacts that are answered
        $this->data = Contact::where('answered', true)->get()->sortByDesc('created_at')->take(10);
    }

    public function showUnanswered()
    {
        // show unanswered messages
        $this->show = "unanswered";


        // get all contacts that are not answered
        $this->data = Contact::where('answered', false)->get()->sortByDesc('created_at')->take(10);
    }

    public function showMessageModal(string $title, string $content)
    {   
        // show message modal with title and content
        $this->dispatchBrowserEvent('showMessageModal', ['title' => $title, 'content' => $content]);
    }

    public function giveAnswerModal(int $contact_id)
    {
        // show give answer modal
        $this->dispatchBrowserEvent('giveAnswerModal', ['contact_id' => $contact_id]);
    }

    public function render()
    {
        return view('livewire.admin.admin-panel', [
            'data' => $this->data,
            'show' => $this->show,
        ]);
    }
}
