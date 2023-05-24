<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // Get posts of user with user_id
        if($this->search == null) // If search is null, get all posts
            $posts = Post::paginate(4);
        else // If search is not null, get posts with search
            $posts = Post::where('title', 'like', '%'.$this->search.'%')->paginate(4);

        return view('livewire.home', [
            'posts' => $posts
        ]);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }
}
