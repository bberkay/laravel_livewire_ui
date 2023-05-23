<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = null;

        // Get posts of user with user_id
        if($this->search == null) // If search is null, get all posts
            $posts = Post::where('user_id', Auth::id())->paginate(4);
        else // If search is not null, get posts with search
            $posts = Post::where('user_id', Auth::id())->where('title', 'like', '%'.$this->search.'%')->paginate(4);
        
        return view('livewire.profile.show-posts', [
            'posts' => $posts,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

}
