<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileForm extends Component
{
    public $name;
    public $email;
    public $editMode = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email'
    ];

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function mount()
    {
        // Set the initial values
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function changePasswordMode()
    {
        // redirect to profile page with change password section
        session()->flash('toggleChangePassword', true);
        return redirect()->route('profile');
    }
    
    public function submit()
    {
        try{
            $this->validate($this->rules); // Validate the form

            // Update the profile
            Auth::user()->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
                
            session()->flash('success', __('profile.success_profile_message')); // Flash success message

        } catch (\Exception $e) {
            session()->flash('error', __('profile.error_profile_message')); // Flash error message
        }
        finally{
            $this->editMode = false; // Exit edit mode
        }
    }

    public function render()
    {
        return view('livewire.profile.profile-form');
    }
}
