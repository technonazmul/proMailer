<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\EventType;
use App\Models\MailTemplate;
use App\Models\QuoteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuoteMailController extends Controller
{
    function add() {
        return view('backend.quotemail.add');
    }
    function edit($id) {
        $company = Company::findOrFail($id);
        $eventTypes = EventType::orderBy('name', 'asc')->get();
        $mailtemplates = MailTemplate::orderBy('name', 'asc')->get();
        return view('backend.quotemail.edit', compact('company','eventTypes','mailtemplates'));
    }
    function update(Request $request) {
        $quotemail = QuoteMail::where('company_id', $request->company_id)->where('event_type_id', $request->event_type_id)->first();
        if ( $quotemail ) {
            $quotemail->mail_template_id = $request->mail_template_id;
            $quotemail->save();
        }else {
            $quotemail = new QuoteMail;
            $quotemail->company_id = $request->company_id;
            $quotemail->event_type_id = $request->event_type_id;
            $quotemail->mail_template_id = $request->mail_template_id;
            $quotemail->save();
        }
        Session::flash('message', 'Updated successfully.'); 
        return back();
    }
}
