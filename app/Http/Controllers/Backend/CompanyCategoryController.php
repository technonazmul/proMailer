<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\CompanyCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
        Session::flash('message', 'Added Successfully');
        return back();
    }
    function update(Request $request, $id) {
        $company_category = CompanyCategory::findOrFail($id);
        if( !$company_category ) {
            return back();
        }
        
        $company_category->name = $request->name;
        $company_category->save();
        Session::flash('message', 'Updated Successfully');
        return back();
    }
    function delete($id) {
        $company_category = CompanyCategory::findOrFail($id);
        if ($company_category) {
            Session::flash('message', 'Deleted Successfully');
            $company_category->delete();
        }
        return back();
    }
    
}
