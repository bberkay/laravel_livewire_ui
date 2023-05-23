<?php

namespace App\View\Components\Post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name, public string $title, public string $description, public string $type, public string $author, public string $cardType, public string $image, public string $date)
    {
        //
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
        return view('components.post.post-card');
    }
}
