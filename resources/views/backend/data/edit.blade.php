@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <form action="{{route('data.update', $item->id)}}" method="POST">
        @csrf
        <h3>Edit Data</h3>
        @php
            $company = App\Models\Company::orderBy('id', 'asc')->get();
            $counter = 1;
        @endphp
        <div class="mb-3">
          <label for="name" class="form-label">Company</label>
          <select class="form-select" name="company_id">
            @foreach ($company as $single)
              <option value="{{$single->id}}" @if($single->id == $item->company_id) selected @endif>{{$single->name}}</option>
            @endforeach
            
          </select>
        </div>
  
          <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$item->first_name}}">
          </div>
          <div class="mb-3">
              <label for="last_name" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="{{$item->last_name}}">
          </div>
  
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="mail" class="form-control" id="email" name="email" value="{{$item->email}}">
          </div>
  
          <div class="mb-3">
              <label for="phone" class="form-label">Phone Name</label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{$item->phone}}">
          </div>
  
          @php
              $event_types = App\Models\EventType::orderBy('id', 'asc')->get();
              $counter = 1;
          @endphp
          <div class="mb-3">
            <label for="event_type" class="form-label">Event Type</label>
            <select class="form-select" name="event_type">
              @foreach ($event_types as $single)
                <option value="{{$single->id}}" @if($single->id == $item->event_type_id) selected @endif>{{$single->name}}</option>
              @endforeach
              
            </select>
          </div>
          <div class="mb-3">
              <label for="event_date" class="form-label">Event Date</label>
              <input type="text" class="form-control" id="event_date" name="event_date" placeholder="DD/MM/YYY"  value="{{$item->event_date}}">
          </div>
          <div class="mb-3">
              <label for="venue_address" class="form-label">Venue Address</label>
              <input type="text" class="form-control" id="venue_address" name="venue_address"  value="{{$item->venue_address}}">
          </div>
          <div class="mb-3">
            <label for="likes_deslikes" class="form-label">Likes and Dislike</label>
            <textarea class="form-control" id="likes_deslikes" rows="3" name="likes_deslikes">{{$item->likes_deslikes}}</textarea>
          </div>
  
          <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" id="notes" rows="3" name="notes">{{$item->notes}}</textarea>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
    
  </div>
  
    
</section>
@endsection
@include('include.notification')
