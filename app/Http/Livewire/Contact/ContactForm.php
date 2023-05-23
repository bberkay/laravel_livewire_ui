<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:3',
    ];

    protected $flash_messages = [
        'success' => [
            "tr" => "İletişim talebiniz başarıyla gönderildi.",
            "en" => "Your contact request has been submitted successfully.",
        ],
        'error' => [
            "tr" => "İletişim talebiniz gönderilirken hata oluştu.",
            "en" => "Your contact request has not been submitted successfully.",
        ],
    ];

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function submit()
    {
        try{
            // Validate the form
            if(Auth::check()){ // If user is logged in, use the user's name and email
                $this->name = Auth::user()->name;
                $this->email = Auth::user()->email;
            }

            $this->validate($this->rules); // Validate the form
            
            Contact::create([
                'name' => $this->name,
                'subject' => $this->subject,
                'email' => $this->email,
                'message' => $this->message,
            ]); // Save the contact form
                
            session()->flash('success', $this->flash_messages['success'][app()->getLocale()]); // Flash success message

        } catch (\Exception $e) {
            session()->flash('error', $this->flash_messages['error'][app()->getLocale()]); // Flash error message
        }
        finally{
            $this->reset(); // Reset the form
        }


    }

    public function render()
    {
        return view('livewire.contact.contact-form');
    }
}
