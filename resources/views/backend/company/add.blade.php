@extends('layouts.admin')
@section('title')
Add Company
@endsection
@section('content')

<section class="content">
    
    <form>
      <h3>COMPANY INFO</h3>
        <div class="mb-3">
          <label for="company_name" class="form-label">Name</label>
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Full Name">
        </div>
        <div class="mb-3">
            <label for="company_phone_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="company_phone_number" name="company_phone_number" placeholder="Contact Number">
        </div>

        <div class="mb-3">
            <label for="company_mail" class="form-label">Email Address</label>
            <input type="mail" class="form-control" id="company_mail" name="company_mail" placeholder="office@example.com">
        </div>

        <div class="mb-3">
            <label for="company_phone_number" class="form-label">Domain Name</label>
            <input type="text" class="form-control" id="company_phone_number" name="company_phone_number" placeholder="example.com">
        </div>
        <div class="mb-3">
            <label for="company_phone_number" class="form-label">Address ( Optional )</label>
            <input type="text" class="form-control" id="company_phone_number" name="company_phone_number" placeholder="Company Address">
        </div>
        <div class="mb-3">
          <label for="company_phone_number" class="form-label">Mail Sender Full Name</label>
          <input type="text" class="form-control" id="company_phone_number" name="company_phone_number" placeholder="Ex. Sandy Walton">
      </div>
        <h3>SMTP INFO</h3>
        <div class="mb-3">
          <label for="company_name" class="form-label">Username</label>
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="user@example.com">
        </div>
        <div class="mb-3">
          <label for="company_name" class="form-label">PORT</label>
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="587">
        </div>
        <div class="mb-3">
          <label for="company_name" class="form-label">HOST</label>
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="mail.example.com">
        </div>
        <div class="mb-3">
          <label for="company_name" class="form-label">Password</label>
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="******">
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    
</section>
@endsection
