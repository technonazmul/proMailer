<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\FollowUpMail;
use App\Models\MailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FollowUpMailController extends Controller
{
    function add() {
        $items = FollowUpMail::orderBy('title', 'asc')->get();
        $templates = MailTemplate::orderBy('name', 'asc')->get();
        return view('backend.followupmail.add', compact('items','templates'));
    }

    function save(Request $request) {
        $followupmail = new FollowUpMail;
        $followupmail->title = $request->title;
        $followupmail->time_gap = $request->time_gap;
        $followupmail->mail_template_id = $request->mail_template_id;
        $followupmail->event_type = $request->event_type;
        
        $followupmail->save();
        Session::flash('message', 'Follow Up Mail Added.'); 
        return back();
        
    }
    function edit($id) {
        $item = FollowUpMail::findOrFail($id);
        $templates = MailTemplate::orderBy('name', 'asc')->get();
        return view('backend.followupmail.edit', compact('item', 'templates'));
        
        
    }
    function update(Request $request,$id) {
        $followupmail = FollowUpMail::findOrFail($id);
        if($followupmail) {
            $followupmail->title = $request->title;
            $followupmail->time_gap = $request->time_gap;
            $followupmail->mail_template_id = $request->mail_template_id;
            $followupmail->event_type = $request->event_type;
            
            $followupmail->save();
        }
        Session::flash('message', 'Follow Up Mail Updated.'); 
        return back();
        
        
    }
}
