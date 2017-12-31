<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /** @var string */
    protected $modelClass;

    public function index()
    {
        return $this->modelClass::all();
    }

    public function create(Request $request)
    {
        return $this->modelClass::create($request->toArray());
    }
}
