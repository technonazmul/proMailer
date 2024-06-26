<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\CompanyCategory;

use Illuminate\Http\Request;

class CompanyCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add() {
        return view('backend.company_category.add');
    }
    function save(Request $request) {
        $company_category = new CompanyCategory;
        $company_category->name = $request->name;
        $company_category->save();
        echo "success";
    }
    function update(Request $request, $id) {
        $company_category = CompanyCategory::findOrFail($id);
        if( !$company_category ) {
            return back();
        }
        
        $company_category->name = $request->name;
        $company_category->save();
        echo "success";
    }
    
}
