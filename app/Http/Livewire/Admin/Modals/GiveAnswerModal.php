<?php

namespace App\Http\Livewire\Admin\Modals;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnswerAsEmail;
use Illuminate\Support\Facades\Auth;

class GiveAnswerModal extends Component
{
    public $answer;
    public $contact_id;

    protected $listeners = ['giveAnswerModal'];

    protected $rules = [
        'answer' => 'required|min:15',
    ];

    public function giveAnswerModal(array $data){
        // get data
        $this->contact_id = $data["contact_id"];
    }

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function submit(){
        try{
            // Validate the form
            $this->validate($this->rules); 

            // Get the contact
            $contact = Contact::where('id', $this->contact_id);

            // Update the contact
            $contact->update([
                'answer' => $this->answer,
                'answered' => true,
                'answered_at' => date('Y-m-d H:i:s'),
                'answerer' => ucfirst(Auth::user()->username),
            ]);
            
            // Get Email
            $email = $contact->select('email')->get()[0]->email;

            // Send answer as email to the user
            Mail::to($email)->send(new AnswerAsEmail($email, $this->answer, $contact->select('subject')->get()[0]->subject));

            // redirect with success message
            return redirect()->route('admin')->with('success', __('admin.success_answer_message'));

        } catch (\Exception $e) {
            return redirect()->route('admin')->with('error', __('admin.error_answer_message'));
        }
    }

    public function render()
    {
        return view('livewire.admin.modals.give-answer-modal');
    }
}
