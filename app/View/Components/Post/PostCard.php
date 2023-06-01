<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class PostCard extends Component
{
    private string $name;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $userid, public string $title, public string $description, public string $type, public string $author, public string $cardType, public string $image, public string $date)
    {
        $this->name = $this->findName($userid);
    }

    public function findName(){
        // Find the name of the user by user id from the database with elequent
        $user = User::find($this->userid);
        return $user->name;
    }

    public function format(string $content) : string
    {
        // Upper case the first letter of the name
        return ucfirst($content);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post.post-card', [
            "name" => $this->name
        ]);
    }
}
