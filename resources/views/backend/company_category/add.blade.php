@extends('layouts.admin')
@section('title')
Company Categories
@endsection
@section('content')

<section class="content">
    <div class="row">
      <div class="col">
        <h3>Add New</h3>
        <form action="{{route('company_category.save')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
      <div class="col">
        <h3>Categories</h3>
        @php
            $company_categories = App\Models\CompanyCategory::orderBy('id', 'asc')->get();
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($company_categories as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->name}}</td>
              <td>
                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#category_edit{{$item->id}}" aria-expanded="false" aria-controls="category_edit{{$item->id}}">
                    Edit
                  </button>

                
                &nbsp;
                &nbsp;
                <a href="{{route('company_category.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item')">Delete</a>
                
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div class="collapse mt-3" id="category_edit{{$item->id}}">
                  <div class="card card-body">
                    
                    <form action="{{route('company_category.update', $item->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Category Name</label>
                          <input type="text" class="form-control" id="name" name="name" required value="{{$item->name}}">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
              </td>
              
            </div>
          </tr>
            @php
                $counter++;
            @endphp
            @endforeach
            
          </tbody>
        </table>
        
      </div>
    </div>
    
    
</section>
@endsection
@include('include.notification')