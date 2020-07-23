<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

abstract class BaseController extends Controller
{
    protected $request;
    protected $name;
    public function __construct(Request $request, $name)
    {
        $this->request = $request;
        $this->name = $name;
        View::share('menu', $name);
    }

    protected function getViewIndex() {
        return "admin.{$this->name}.index";
    }

    protected function getViewCreate() {
        return "admin.{$this->name}.create";
    }
}
