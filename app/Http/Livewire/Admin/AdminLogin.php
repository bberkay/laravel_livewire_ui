<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminLogin extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function updated($field)
    {
        // check if the field is in the rules
        $this->validateOnly($field, $this->rules);
    }

    public function submit()
    {
        // validate the data first
        $this->validate($this->rules);
        
        // find the correct password by username
        $user = User::where('username', $this->username)->first();

        // check if password matches
        if (!$user || !Hash::check($this->password, $user->password)) {
            session()->flash('error', 'Invalid username or password.');
            return;
        }

        session()->flash('success', 'Login successfully.');
        
        // redirect to admin page
        return redirect()->route('admin');
    }

    public function render()
    {
        return view('livewire.admin.admin-login');
    }
}
