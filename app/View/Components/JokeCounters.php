<?php

namespace App\View\Components;

use App\Models\Contact;
use App\Models\Organization;
use Illuminate\View\Component;

class JokeCounters extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $shareIcon,
        public string $likeIcon,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // Not actual real data, it's just for a "working" example!
        $shareCount = Organization::query()->count();
        $likeCount = Contact::query()->count();

        return view('components.joke-counters', [
            'shareCount' => $shareCount,
            'likeCount' => $likeCount,
        ]);
    }
}
