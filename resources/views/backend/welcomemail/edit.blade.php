@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="col-md-12">
    <h3>Assign Welcome Mail</h3>
        @php
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Event</th>
              <th scope="col">Select Template</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            
              @foreach ($eventTypes as $item)
              <tr>
              <td>{{$counter}}</td>
              <td>{{$item->name}}</td>
              <td>Template</td>
              <td>Update</td>
            </tr>
              @php
                   $counter++
              @endphp
            @endforeach
            
            
          </tbody>
        </table>

  </div>

  
    
</section>
@endsection
@include('include.notification')