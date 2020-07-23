<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconEyeOrEyeClose extends Component
{
    private $status;
    public function __construct($status)
    {
        $this->status = $status;
    }

    public function render()
    {
        return view('components.icon-eye-or-eye-close', ['status' => $this->status]);
    }
}
