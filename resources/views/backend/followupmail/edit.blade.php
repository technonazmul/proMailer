@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-body">
        <form action="{{route('followupmail.update', $item->id)}}" method="POST">
          @csrf
          
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$item->title}}">
            </div>
            <div class="mb-3">
              <label for="time_gap" class="form-label">Follow UP Will Send After</label>
              <input type="number" min="1" class="form-control" id="time_gap" name="time_gap" placeholder="Days" value="{{$item->time_gap}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Event Type</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="event_type" id="event_type" value="other" @if ($item->event_type == 'other') checked @endif> 
                <label class="form-check-label" for="event_type">
                  Other
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="event_type" id="event_type" value="wedding" @if ($item->event_type == 'wedding') checked @endif>
                <label class="form-check-label" for="event_type">
                  Wedding
                </label>
              </div>
            </div>
            <div  class="mb-3">
              <label for="time_gap" class="form-label">Select template</label>
            <select class="form-select" aria-label="Default" name="mail_template_id">
              
              @foreach ($templates as $template)
                <option value="{{$template->id}}" @if ($item->mail_template_id == $template->id) selected @endif>{{$template->name}}</option>
              @endforeach
              
              
            </select>
          </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>
    </div>
  </div>
  
    
</section>
@endsection
@include('include.notification')