<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add()
    {
        return view('backend.company.add');
    }
    function save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'domain' => 'required',
            'mail_sender_name' => 'required',
            'smtp_username' => 'required',
            'smtp_port' => 'required',
            'smtp_host' => 'required',
            'smtp_password' => 'required',
            'category_id' => 'required',
        ]);
        $company = new Company;
        $company->name = $request->name;
        $company->company_id = Str::slug($company->name, '_');
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->domain = $request->domain;
        $company->address = $request->address;
        $company->review_videos = $request->review_videos;
        $company->videos = $request->videos;
        $company->mail_sender_name = $request->mail_sender_name;
        $company->smtp_username = $request->smtp_username;
        $company->smtp_port = $request->smtp_port;
        $company->smtp_host = $request->smtp_host;
        $company->smtp_password = $request->smtp_password;
        $company->category_id = $request->category_id;
        $company->test_mail = $request->test_mail;
        $company->save();
        Session::flash('message', 'Added Successfully');
        return back();

    }
    function edit($id)
    {
        $item = Company::findOrFail($id);
        if ($item) {
            return view('backend.company.edit', compact('item'));
        } else {
            return back();
        }

    }

    function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'domain' => 'required',
            'mail_sender_name' => 'required',
            'smtp_username' => 'required',
            'smtp_port' => 'required',
            'smtp_host' => 'required',
            'smtp_password' => 'required',
            'category_id' => 'required',
        ]);
        $company = Company::findOrFail($id);
        if ($company) {
            $company->name = $request->name;
            $company->company_id = Str::slug($company->name, '_');
            $company->phone = $request->phone;
            $company->email = $request->email;
            $company->domain = $request->domain;
            $company->address = $request->address;
            $company->review_videos = $request->review_videos;
            $company->videos = $request->videos;
            $company->mail_sender_name = $request->mail_sender_name;
            $company->smtp_username = $request->smtp_username;
            $company->smtp_port = $request->smtp_port;
            $company->smtp_host = $request->smtp_host;
            $company->smtp_password = $request->smtp_password;
            $company->category_id = $request->category_id;
            $company->test_mail = $request->test_mail;
            $company->save();
            Session::flash('message', 'Updated Successfully');
            return back();
        } else {
            echo "not found";
        }



    }

    function delete($id)
    {
        $item = Company::findOrFail($id);
        if ($item) {
            $item->delete();
            Session::flash('message', 'Deleted Successfully');
            return back();
        } else {
            return back();
        }

    }
}
