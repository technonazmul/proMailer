<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\EventType;
use Illuminate\Http\Request;

class WelcomeMailController extends Controller
{
    function add() {
        return view('backend.welcomemail.add');
    }
    function edit($id) {
        $company = Company::findOrFail($id);
        $eventTypes = EventType::orderBy('name', 'asc')->get();
        return view('backend.welcomemail.edit', compact('company','eventTypes'));
    }
}
