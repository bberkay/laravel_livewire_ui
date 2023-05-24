<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class ProfileSection extends Component
{
    public bool $showPosts = false;
    public bool $showCreatePost = false;
    public bool $showProfile = true;
    public bool $showChangePassword = false;

    public function togglePosts()
    {
        // show posts and hide other sections
        $this->showCreatePost = false;
        $this->showProfile = false;
        $this->showChangePassword = false;
        $this->showPosts = true;
    }

    public function toggleCreatePost()
    {
        // show create post and hide other sections
        $this->showPosts = false;
        $this->showProfile = false;
        $this->showChangePassword = false;
        $this->showCreatePost = true;
    }

    public function toggleProfile()
    {
        // show profile and hide other sections
        $this->showPosts = false;
        $this->showCreatePost = false;
        $this->showChangePassword = false;
        $this->showProfile = true;
    }
    
    public function toggleChangePassword(){
        // show change password and hide other sections
        $this->showPosts = false;
        $this->showCreatePost = false;
        $this->showProfile = false;
        $this->showChangePassword = true;
    }
    
    public function render()
    {
        if(session()->has('toggleChangePassword')){
            $this->toggleChangePassword();
        }

        return view('livewire.profile.profile-section');
    }
}
