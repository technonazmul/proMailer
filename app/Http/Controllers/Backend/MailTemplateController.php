<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\MailTemplate;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MailTemplateController extends Controller
{
    function add() {
        $items = MailTemplate::orderBy('name', 'asc')->get();
        
        return view('backend.mailtemplate.add', compact('items'));
    }
    function save(Request $request) {
        $mailtemplate = new MailTemplate;
        $mailtemplate->name = $request->name;
        $mailtemplate->subject = $request->subject;
        $mailtemplate->template = $request->template;
        $mailtemplate->save();
        Session::flash('message', 'Template Added.'); 
        return back();
        
    }
    function edit($id) {
        $item = MailTemplate::findOrFail($id);
        return view('backend.mailtemplate.edit', compact('item'));
        
        
    }
    function update(Request $request,$id) {
        $mailtemplate = MailTemplate::findOrFail($id);
        if($mailtemplate) {
        $mailtemplate->name = $request->name;
        $mailtemplate->subject = $request->subject;
        $mailtemplate->template = $request->template;
        $mailtemplate->save();
        }
        Session::flash('message', 'Template Updated.'); 
        return back();
        
        
    }
}
