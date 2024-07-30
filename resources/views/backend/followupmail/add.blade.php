@php
    use Illuminate\Support\Str;
@endphp
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
      <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Add New
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <form action="{{route('followupmail.save')}}" method="POST">
            @csrf
            
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
              </div>
              <div class="mb-3">
                <label for="time_gap" class="form-label">Follow UP Will Send After</label>
                <input type="number" min="1" class="form-control" id="time_gap" name="time_gap" placeholder="Days">
              </div>
              <div class="mb-3">
                <label class="form-label">Event Type</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="event_type" id="event_type" value="other" checked> 
                  <label class="form-check-label" for="event_type">
                    Other
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="event_type" id="event_type" value="wedding" >
                  <label class="form-check-label" for="event_type">
                    Wedding
                  </label>
                </div>
              </div>
              <div  class="mb-3">
                <label for="time_gap" class="form-label">Select template</label>
              <select class="form-select" aria-label="Default" name="mail_template_id">
                
                @foreach ($templates as $template)
                  <option value="{{$template->id}}">{{$template->name}}</option>
                @endforeach
                
                
              </select>
            </div>
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
    
    
  </div>

  <div class="col-md-12 mt-5">
    <h3>Follow Up Mails</h3>
        @php
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Gap</th>
              <th scope="col">Template</th>
              <th scope="col">Event Type</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->title}}</td>
              <td>{{$item->time_gap}} Days</td>
              <td>
                {{$item->mailtemplate->name}}
              </td>
              <td>
                {{$item->event_type}}
              </td>
              <td>
                 <a href="{{route('followupmail.edit', $item->id)}}" class="btn btn-primary">Edit</a>

                
                &nbsp;
                &nbsp;
                <a href="{{route('followupmail.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                
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
@include('include.notification')