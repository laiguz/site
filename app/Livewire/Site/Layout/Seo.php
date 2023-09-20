<?php

namespace App\Livewire\Site\Layout;

use Livewire\Component;

class Seo extends Component
{
    public $title;
    public $tags;
    public $description;

    public function render()
    {
        return view('livewire.site.layout.seo');
    }
}
