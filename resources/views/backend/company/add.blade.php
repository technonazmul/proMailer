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
          <form action="{{route('company.save')}}" method="POST">
            @csrf
            
            @php
                $company_categories = App\Models\CompanyCategory::orderBy('id', 'asc')->get();
                $counter = 1;
            @endphp
            <div class="mb-3">
              <label for="name" class="form-label">Company Category</label>
              <select class="form-select" name="category_id">
                @foreach ($company_categories as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                
              </select>
            </div>
      
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Company Full Name">
              </div>
              <div class="mb-3">
                  <label for="phone" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact Number">
              </div>
      
              <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="mail" class="form-control" id="email" name="email" placeholder="office@example.com">
              </div>
      
              <div class="mb-3">
                  <label for="domain" class="form-label">Domain Name</label>
                  <input type="text" class="form-control" id="domain" name="domain" placeholder="example.com">
              </div>
              <div class="mb-3">
                  <label for="address" class="form-label">Address ( Optional )</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Company Address">
              </div>
              <div class="mb-3">
                <label for="videos" class="form-label">Videos Link </label>
                <input type="text" class="form-control" id="videos" name="videos" placeholder="Review Videos Link">
              </div>
              <div class="mb-3">
                <label for="review_videos" class="form-label">Review Videos Link</label>
                <input type="text" class="form-control" id="review_videos" name="review_videos" placeholder="Videos Link">
              </div>
            
              <div class="mb-3">
                <label for="mail_sender_name" class="form-label">Mail Sender Full Name</label>
                <input type="text" class="form-control" id="mail_sender_name" name="mail_sender_name" value="Sandy Walton">
            </div>
              <h3>SMTP INFO</h3>
              <div class="mb-3">
                <label for="smtp_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="smtp_username" name="smtp_username" placeholder="user@example.com">
              </div>
              <div class="mb-3">
                <label for="smtp_port" class="form-label">PORT</label>
                <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="25">
              </div>
              <div class="mb-3">
                <label for="smtp_host" class="form-label">HOST</label>
                <input type="text" class="form-control" id="smtp_host" name="smtp_host" placeholder="mail.example.com">
              </div>
              <div class="mb-3">
                <label for="test_mail" class="form-label">Test Mail</label>
                <input type="text" class="form-control" id="test_mail" name="test_mail" placeholder="testmail@gmail.com">
              </div>
              <div class="mb-3">
                <label for="smtp_password" class="form-label">Password</label>
                <input type="text" class="form-control" id="smtp_password" name="smtp_password" value="Surr3y%ShuvoShuvo1%">
              </div>
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
    
    
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
              <th scope="col">ID</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($company as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->company_id}}</td>
              <td>
                 <a href="{{route('company.edit', $item->id)}}" class="btn btn-primary">Edit</a>

                
                &nbsp;
                &nbsp;
                <a href="{{route('company.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                
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
<script>
  document.getElementById('domain').addEventListener('input', function() {
    const textValue = this.value;

    // Modify
    document.getElementById('email').value = `office@${textValue}`;
    document.getElementById('smtp_username').value = `office@${textValue}`;
    document.getElementById('smtp_host').value = `mail.${textValue}`;
  });
</script>
@endsection
@include('include.notification')