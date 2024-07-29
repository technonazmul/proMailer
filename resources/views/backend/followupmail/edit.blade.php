@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-body">
        <form action="{{route('mailtemplate.update', $item->id)}}" method="POST">
          @csrf
          
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Template Name" value="{{$item->name}}">
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Mail Subject" value="{{$item->subject}}">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Template</label>
              <textarea name="template" id="" cols="30" rows="10" class="form-control">{{$item->template}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>
  
    
</section>
@endsection
@include('include.notification')