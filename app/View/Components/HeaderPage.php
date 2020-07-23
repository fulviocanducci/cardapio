<?php namespace App\View\Components;

use Illuminate\View\Component;

class HeaderPage extends Component
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title ?? 'Default';
    }

    public function render()
    {
        return view('components.header-page', ['title' => $this->title]);
    }
}
