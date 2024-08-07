<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Data;
use App\Models\EventType;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add()
    {
        return view('backend.data.add');
    }

    function save(Request $request)
    {
        $data = new Data;
        $data->company_id = $request->company_id;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->event_type_id = $request->event_type;
        $event = EventType::findOrFail($request->event_type);
        if($event) {
            $data->event_type = $event->name;
        }else {
            $data->event_type = 'Other';
        }
        $data->event_date = $request->event_date;
        $data->venue_address = $request->venue_address;
        $data->likes_deslikes = $request->likes_deslikes;
        $data->notes = $request->notes;
        $data->save();
        Session::flash('message', 'Data Added Successfully'); 
        return redirect()->route('data.index');
    }
    function csvUpload(Request $request)
    {
        DB::beginTransaction();
        // Handle the file upload and processing
        $file = $request->file('csv_file');
        $path = $file->getRealPath();

        // Open and read the file
        $file = fopen($path, 'r');
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $csvdata = array_combine($header, $row);
            $data = new Data;
            $data->company_id = $csvdata['companyId'];
            if($csvdata['companyId']) {
                $company = Company::where('company_id', $csvdata['companyId'])->first();
                if ($company) {
                    $data->company_id = $company->id;
                }else {
                    DB::rollBack();
                    echo "company_id missing to ".$csvdata['email'];
                    return;
                }
            }else {
                DB::rollBack();
                echo "company_id missing to ".$csvdata['email'];
                return;
            }
            $data->first_name = $csvdata['firstName'];
            $data->email = $csvdata['email'];
            $data->phone = $csvdata['phone'];
            $data->event_type = $csvdata['event'];
            $data->event_type_id = $csvdata['eventId'];
            if($csvdata['eventId']) {
                $event = EventType::where('event_type_id', $csvdata['eventId'])->first();
                if ($event) {
                    $data->event_type_id = $event->id;
                }else {
                    $data->event_type_id = 16;
                }
            }
            $data->event_date = $csvdata['date'];
            $data->venue_address = $csvdata['address'];
            $data->likes_deslikes = $csvdata['likes'];
            $data->notes = $csvdata['notes'];
            $data->save();
            
        }
        // Commit the transaction
        DB::commit();
        
        Session::flash('message', 'Data Added Successfully'); 
        return redirect()->route('data.index');
    }

    function index() : View {
        $datas = Data::orderBy('id', 'desc')->get();
        return view('backend.data.index', compact('datas'));
    }
    function edit($id) : View {
        $item = Data::findOrFail($id);
        if ($item) {
            Session::flash('message', 'Updated successfully'); 
            return view('backend.data.edit', compact('item'));
        }
    }
    function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $data->company_id = $request->company_id;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->event_type_id = $request->event_type;
        $event = EventType::findOrFail($request->event_type);
        if($event) {
            $data->event_type = $event->name;
        }else {
            $data->event_type = 'Other';
        }
        $data->event_date = $request->event_date;
        $data->venue_address = $request->venue_address;
        $data->likes_deslikes = $request->likes_deslikes;
        $data->notes = $request->notes;
        $data->save();
        Session::flash('message', 'Updated successfully'); 
        return back();
    }
    function delete($id) {
        $data = Data::findOrFail($id);
        $data->delete();
        Session::flash('message', 'Deleted successfully'); 
        return back();
    }
    function toggle($id) {
        $data = Data::findOrFail($id);
        if($data) {
            if($data->status == 1) {
                $data->status = 0;
            }else {
                $data->status = 1;
            }
            $data->save();
        }
        
        Session::flash('message', 'Status Update.'); 
        return back();
        
    }

}
