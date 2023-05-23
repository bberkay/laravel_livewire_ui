<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class ProfileSection extends Component
{
    public bool $showPosts = false;
    public bool $showCreatePost = false;
    public bool $showProfile = false;

    public function togglePosts()
    {
        // show posts and hide other sections
        $this->showCreatePost = false;
        $this->showProfile = false;
        $this->showPosts = !$this->showPosts;
    }

    public function toggleCreatePost()
    {
        // show create post and hide other sections
        $this->showPosts = false;
        $this->showProfile = false;
        $this->showCreatePost = !$this->showCreatePost;
    }

    public function toggleProfile()
    {
        // show profile and hide other sections
        $this->showPosts = false;
        $this->showCreatePost = false;
        $this->showProfile = !$this->showProfile;
    }
    
    
    public function render()
    {
        return view('livewire.profile.profile-section');
    }
}
