<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $old_password;
    public $new_password;
    public $confirm_password;
    
    public function __construct()
    {
        //
    }

    protected $rules = [
        'old_password' => 'required',
        'new_password' => 'required|min:8',
        'confirm_password' => 'required|same:new_password',
    ];

    public function updated($field)
    {
        // Update the validation whenever a field is updated
        $this->validateOnly($field, $this->rules);
    }

    public function changeEditMode()
    {
        // redirect to profile page with profile section
        session()->flash('toggleProfile', true);
        return redirect()->route('profile');
    }

    public function submit(){

        try{
            $this->validate($this->rules); // Validate the form

            // Check if the old password is correct
            if(!Hash::check($this->old_password, Auth::user()->password)){
                session()->flash('error', __('profile.error_old_password_message')); // Flash error message
                return;
            }

            // Update the password
            Auth::user()->update([
                'password' => Hash::make($this->new_password),
            ]);
            
            session()->flash('success', __('profile.success_password_message')); // Flash success message

        } catch (\Exception $e) {
            session()->flash('error', __('profile.error_password_message')); // Flash error message
        }
        finally{
            $this->reset(); // Reset the form
        }
    }

    public function render()
    {
        return view('livewire.profile.change-password');
    }
}
