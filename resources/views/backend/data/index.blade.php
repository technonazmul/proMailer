@extends('layouts.admin')

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
              <th scope="col">Company</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Event</th>
              <th scope="col">Service Type</th>
              <th scope="col">Date</th>
              <th scope="col">Address</th>
              <th scope="col">Likes</th>
              <th scope="col">Notes</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $item)
            <tr>
              <th scope="row">{{$counter}}</th>
              <td>{{$item->first_name}}</td>
              <td>{{$item->company->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td>{{$item->event_type}}</td>
              <td>{{$item->event->name}}</td>
              <td>{{$item->event_date}}</td>
              <td>{{$item->venue_address}}</td>
              <td>
                @if(!empty($item->likes_deslikes))
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#likes{{$item->id}}">
                  View
                </button>
                @else
                  No Data
                @endif
              </td>
              <td>
                @if(!empty($item->notes))
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#note{{$item->id}}">
                  View
                </button>
                @else
                  No Data
                @endif
              </td>
              <td>
                @if($item->status === 1)
                <a href="{{route('data.toggle', $item->id)}}"><i class="fa-solid fa-toggle-on" style="color:green;"></i></a>
                
                @else
                <a href="{{route('data.toggle', $item->id)}}"><i class="fa-solid fa-toggle-off"></i></a>
                @endif
                
                
              </td>

              

              <td>
                 <a href="{{route('data.edit', $item->id)}}" class=""><i class="fas fa-edit"></i></a>

                
                &nbsp;
                
                <a href="{{route('data.delete', $item->id)}}" class="" onclick="return confirm('Are you sure you want to delete this item')"><i class="fa fa-trash" aria-hidden="true" style="color: #d9534f;"></i></a>
                
              </td>
            </tr>
            <!-- Modal -->
              <div class="modal fade" id="likes{{$item->id}}" tabindex="-1" aria-labelledby="likes{{$item->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="likes{{$item->id}}Label">Likes/Dislikes</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      {{$item->likes_deslikes}}
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="note{{$item->id}}" tabindex="-1" aria-labelledby="note{{$item->id}}Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="note{{$item->id}}Label">Notes</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      {{$item->notes}}
                    </div>
                  </div>
                </div>
              </div>
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
