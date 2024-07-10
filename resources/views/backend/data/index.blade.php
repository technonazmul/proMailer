@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
   
  <div class="col-12">
    <h3>Datas</h3>
        @php
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Company</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Event</th>
              <th scope="col">Event Type</th>
              <th scope="col">Date</th>
              <th scope="col">Address</th>
              <th scope="col">Likes</th>
              <th scope="col">Notes</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->first_name}}</td>
              <td>{{$item->company->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->event_type}}</td>
              <td>{{$item->event->name}}</td>
              <td>{{$item->event_date}}</td>
              <td>{{$item->vanue_address}}</td>
              <td>{{$item->likes_deslikes}}</td>
              <td>{{$item->notes}}</td>

              

              <td>
                 <a href="{{route('data.edit', $item->id)}}" class="btn btn-primary">Edit</a>

                
                &nbsp;
                &nbsp;
                <a href="{{route('data.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                
              </td>
            </tr>
            
            @php
                $counter++;
                
            @endphp
            @endforeach
            
          </tbody>
        </table>
  </div>
    
</section>

@endsection
