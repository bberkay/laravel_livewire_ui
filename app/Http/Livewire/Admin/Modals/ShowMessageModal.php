<?php

namespace App\Http\Livewire\Admin\Modals;

use Livewire\Component;

class ShowMessageModal extends Component
{
    public $title;
    public $content;

    protected $listeners = ['showMessageModal'];

    public function showMessageModal(array $data){
        // get data
        $this->title = $data['title'];
        $this->content = $data['content'];
    }

    public function render()
    {
        return view('livewire.admin.modals.show-message-modal');
    }
}
