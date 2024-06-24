@extends('layouts.admin')
@section('title')
Company Categories
@endsection
@section('content')

<section class="content">
    <div class="row">
      <div class="col">
        <h3>Add New</h3>
        <form>
            <div class="mb-3">
              <label for="company_name" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Full Name">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
      <div class="col">
        <h3>Categories</h3>
      </div>
    </div>
    
    
</section>
@endsection
