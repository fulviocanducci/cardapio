<?php namespace App\Http\Controllers\Admin;

use App\Models\Inputs;
use Illuminate\Http\Request;

class InputsController extends BaseController
{
    private $model;
    public function __construct(Request $request, Inputs $model)
    {
        parent::__construct($request, "inputs");
        $this->model = $model;
    }

    public function Index()
    {
        $options = [
            'datas' => $this->model->select('id','description','complement')->paginate(1),
            'headers' => [['Id', '10'], ['Descrição','63'], ['Complemento','20']]
        ];
        return view($this->getViewIndex(), $options);
    }
}
