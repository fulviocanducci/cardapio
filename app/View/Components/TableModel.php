<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableModel extends Component
{
    private $headers;
    private $datas;
    public function __construct($datas, $headers)
    {
        $this->datas = $datas;
        $this->headers = $headers;
    }
    public function render()
    {
        $options = ['datas' => $this->datas, 'headers'=>$this->headers];
        return view('components.table-model', $options);
    }
}
