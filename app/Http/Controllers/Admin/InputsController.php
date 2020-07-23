<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class InputsController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request, "inputs");
    }

    public function Index()
    {
        return view($this->getViewIndex());
    }
}
