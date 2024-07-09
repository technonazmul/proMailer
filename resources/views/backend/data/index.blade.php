@extends('layouts.admin')
@section('title')
Company Management
@endsection
@section('content')

<section class="content">
  <div class="row">
   
  <div class="col-12">
    <h3>Datas</h3>
        @php
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
            @foreach ($datas as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->first_name}}</td>
              <td>{{$item->company->name}}</td>
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

@endsection
