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

    <form action="{{route('company.update', $item->id)}}" method="POST">
      @csrf
      <h3>COMPANY INFO</h3>
      @php
          $company_categories = App\Models\CompanyCategory::orderBy('id', 'asc')->get();
          $counter = 1;
      @endphp
      <div class="mb-3">
        <label for="name" class="form-label">Company Category</label>
        <select class="form-select" name="category_id">
          @foreach ($company_categories as $category)
            <option value="{{$category->id}}" @if($item->category_id == $category->id) selected @endif>{{$category->name}}</option>
          @endforeach
          
        </select>
      </div>

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$item->phone}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="mail" class="form-control" id="email" name="email" value="{{$item->email}}">
        </div>

        <div class="mb-3">
            <label for="domain" class="form-label">Domain Name</label>
            <input type="text" class="form-control" id="domain" name="domain" value="{{$item->domain}}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address ( Optional )</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$item->address}}">
        </div>
        <div class="mb-3">
          <label for="mail_sender_name" class="form-label">Mail Sender Full Name</label>
          <input type="text" class="form-control" id="mail_sender_name" name="mail_sender_name" value="{{$item->mail_sender_name}}">
      </div>
        <h3>SMTP INFO</h3>
        <div class="mb-3">
          <label for="smtp_username" class="form-label">Username</label>
          <input type="text" class="form-control" id="smtp_username" name="smtp_username" value="{{$item->smtp_username}}">
        </div>
        <div class="mb-3">
          <label for="smtp_port" class="form-label">PORT</label>
          <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="{{$item->smtp_port}}">
        </div>
        <div class="mb-3">
          <label for="smtp_host" class="form-label">HOST</label>
          <input type="text" class="form-control" id="smtp_host" name="smtp_host" value="{{$item->smtp_host}}">
        </div>
        <div class="mb-3">
          <label for="smtp_password" class="form-label">Password</label>
          <input type="text" class="form-control" id="smtp_password" name="smtp_password" value="{{$item->smtp_password}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    
  </div>
  
    
</section>
@endsection
