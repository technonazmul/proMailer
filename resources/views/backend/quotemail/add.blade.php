@extends('layouts.admin')

@section('content')

<section class="content">
  
  <div class="col-md-12">
    <h3>Assign Quote Mail</h3>
        @php
            $company = App\Models\Company::orderBy('id', 'asc')->get();
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Company</th>
              <th scope="col">Welcome Mail Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($company as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->name}}</td>
              <td>
                 <a href="{{route('quotemail.edit', $item->id)}}" class="btn btn-primary">Add / Edit</a>
                
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