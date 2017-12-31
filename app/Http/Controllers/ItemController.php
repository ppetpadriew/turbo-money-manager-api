<?php

namespace App\Http\Controllers;


use App\Models\Item;

class ItemController extends Controller
{
    protected $modelClass = Item::class;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}