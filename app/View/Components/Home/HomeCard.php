<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $user_name, public string $user_image, public string $description, public string $type, public string $author, public string $card_type, public string $image)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.home-card');
    }
}
