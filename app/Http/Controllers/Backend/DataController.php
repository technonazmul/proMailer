<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add() {
        return view('backend.data.add');
    }
    
}
