<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

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
        $data->event_type = $request->event_type;
        $data->event_date = $request->event_date;
        $data->venue_address = $request->venue_address;
        $data->likes_deslikes = $request->likes_deslikes;
        $data->notes = $request->notes;
        $data->save();
        echo "sucess";
    }
    function csvUpload(Request $request)
    {
        // Handle the file upload and processing
        $file = $request->file('csv_file');
        $path = $file->getRealPath();

        // Open and read the file
        $file = fopen($path, 'r');
        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            // $csvdata = array_combine($header, $row);
            // $data = new Data;
            // $data->company_id = $request->company_id;
            // $data->first_name = $request->first_name;
            // $data->last_name = $request->last_name;
            // $data->email = $request->email;
            // $data->phone = $request->phone;
            // $data->event_type = $request->event_type;
            // $data->event_date = $request->event_date;
            // $data->venue_address = $request->venue_address;
            // $data->likes_deslikes = $request->likes_deslikes;
            // $data->notes = $request->notes;
            // $data->save();
            // echo "sucess";
            // echo $data['Phone'];
        }
    }

}
