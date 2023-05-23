<?php

namespace App\View\Components\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ShowPosts extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Get posts of user with user_id
        $this->posts = Post::where('user_id', Auth::id())->get();

        return view('components.profile.show-posts');
    }
}
