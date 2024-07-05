<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\EventType;
use Illuminate\Support\Str;
use App\Rules\UniqueSlug;

use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add() {
        return view('backend.event.add');
    }
    function save(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'unique:event_types', new UniqueSlug],
        ]);

        $event_type = new EventType;
        $event_type->name = $request->name;
        $event_type->event_type_id = Str::slug($request->name, '_');
        $event_type->save();
        echo "success";
        return back();
    }
    function update(Request $request, $id) {
        $event_type = EventType::findOrFail($id);
        if( !$event_type ) {
            return back();
        }
        
        $event_type->name = $request->name;
        $event_type->event_type_id = Str::slug($request->name, '_');
        $event_type->save();
        echo "success";
        return back();
    }
    function delete($id) {
        $event_type = EventType::findOrFail($id);
        if ($event_type) {
            $event_type->delete();
        }
        return back();
    }
}
