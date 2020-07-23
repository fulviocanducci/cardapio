<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request, 'products');
    }

    public function Index()
    {
        return view($this->getViewIndex());
    }
}
