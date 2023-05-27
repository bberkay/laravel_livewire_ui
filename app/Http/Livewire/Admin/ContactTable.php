<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class ContactTable extends Component
{
    public $data;
    public $show = 'unanswered';

    protected $listeners = ['showAnswered', 'showUnanswered'];

    public function mount(){
        // get unanswered contacts by default
        $this->showUnanswered();
    }
    
    public function showAnswered(){
        // get answered contacts
        $this->data = Contact::where('answered', true)->get()->sortByDesc('created_at')->take(10);

        // change contact table component variable
        $this->show = 'answered';
    }

    public function showUnanswered(){
        // get unanswered contacts
        $this->data = Contact::where('answered', false)->get()->sortByDesc('created_at')->take(10);

        // change contact table component variable
        $this->show = 'unanswered';
    }

    public function showMessageModal(string $title, string $content){
        //
    }

    public function giveAnswerModal(string $contact_id){
        //
    }

    public function render()
    {
        return view('livewire.admin.contact-table');
    }
}
