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
          <form action="{{route('mailtemplate.save')}}" method="POST">
            @csrf
            
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Template Name">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Template</label>
                <textarea name="template" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
    
    
  </div>
  <div class="col-md-6">
    Short Codes:
    [company_name]
    [company_domain]
    [company_phone]
    [company_mail]
    [customer_first_name]
    [customer_last_name]
    [admin_name]
  
  </div>
  <div class="col-md-12">
    <h3>Companies</h3>
        @php
            $company = App\Models\Company::orderBy('id', 'asc')->get();
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Template</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->template}}</td>
              <td>
                 <a href="{{route('mailtemplate.edit', $item->id)}}" class="btn btn-primary">Edit</a>

                
                &nbsp;
                &nbsp;
                <a href="{{route('mailtemplate.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                
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