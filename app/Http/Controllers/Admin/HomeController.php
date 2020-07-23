<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request, "home");
    }

    public function index()
    {
        return View($this->getViewIndex());
    }
}
