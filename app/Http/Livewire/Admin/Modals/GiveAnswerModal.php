<?php

namespace App\Http\Livewire\Admin\Modals;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\AnswerAsEmail;

class GiveAnswerModal extends Component
{
    public $answer;
    public $contactId;

    protected $rules = [
        'answer' => 'required|min:15',
    ];

    public function __construct(string $contactId)
    {
        $this->contactId = $contactId;
    }

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function updatedContactId()
    {
        // Değer güncellendiğinde yapılacak işlemler
        
        $this->render();
    }


    public function submit(){

            $this->validate($this->rules); // Validate the form

            // Get the contact
            $contact = Contact::where('id', $this->contact_id)->first();

            // save the contact id and answer in log file
            $log = fopen("log.txt", "a");
            fwrite($log, "Contact ID: " . $this->contact_id . "\n");
            fwrite($log, "Answer: " . $this->answer . "\n");
            fclose($log);

            // Update the contact
            $contact->update([
                'answer' => $this->answer,
                'answered' => true,
                'answered_at' => date('Y-m-d H:i:s'),
                'answerer' => 'Admin' 
            ]);

            // Get the email of the contact
            $email = $contact->email;

            // Send answer as email to the user
            Mail::to($email)->send(new AnswerAsEmail($email, $this->answer, $contact->subject));

            // redirect with success message
            return redirect()->route('admin')->with('success', __('admin.success_answer_message'));

        /*try{
            $this->validate($this->rules); // Validate the form

            // Get the contact
            $contact = Contact::where($this->contact_id);

            // Update the contact
            $contact->update([
                'answer' => $this->answer,
                'answered' => true,
                'answered_at' => date('Y-m-d H:i:s'),
                'answerer' => 'Admin' // TODO: Change this to the admin's name after admin login is implemented
            ]);

            // Send answer as email to the user
            Mail::to($contact->email)->send(new AnswerAsMail($contact));

            // redirect with success message
            return redirect()->route('admin')->with('success', __('admin.success_answer_message'));

        } catch (\Exception $e) {
            return redirect()->route('admin')->with('error', __('admin.error_answer_message'));
        }*/
    }

    public function render()
    {
        return view('livewire.admin.modals.give-answer-modal');
    }
}
