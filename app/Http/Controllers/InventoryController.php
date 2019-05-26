<?php

namespace App\Http\Controllers;

use App\Inventory;

class InventoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $inventory = Inventory::all();
        return response(json_encode($inventory), 200)->header('Content-Type', 'text/json');
    }
}
