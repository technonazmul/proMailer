<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\EventType;
use App\Models\MailTemplate;
use App\Models\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WelcomeMailController extends Controller
{
    function add() {
        return view('backend.welcomemail.add');
    }
    function edit($id) {
        $company = Company::findOrFail($id);
        $eventTypes = EventType::orderBy('name', 'asc')->get();
        $mailtemplates = MailTemplate::orderBy('name', 'asc')->get();
        return view('backend.welcomemail.edit', compact('company','eventTypes','mailtemplates'));
    }
    function update(Request $request) {
        $welcomemail = WelcomeMail::where('company_id', $request->company_id)->where('event_type_id', $request->event_type_id)->first();
        if ( $welcomemail ) {
            $welcomemail->mail_template_id = $request->mail_template_id;
            $welcomemail->save();
        }else {
            $welcomemail = new WelcomeMail;
            $welcomemail->company_id = $request->company_id;
            $welcomemail->event_type_id = $request->event_type_id;
            $welcomemail->mail_template_id = $request->mail_template_id;
            $welcomemail->save();
        }
        Session::flash('message', 'Updated successfully.'); 
        return back();
    }
}
