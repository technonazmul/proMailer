@extends('layouts.admin')

@section('content')

<section class="content">
  <div class="col-md-12">
    <h3>Assign Welcome Mail</h3>
        @php
            $counter = 1;
        @endphp
        
       
        <table class="table table-striped ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Event</th>
              <th scope="col">Select Template</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
            
              @foreach ($eventTypes as $item)
                    @php
                        $welcomemail = App\Models\WelcomeMail::where('company_id', $company->id)->where('event_type_id', $item->id)->first();
                    @endphp
              <tr>
              <td>{{$counter}}</td>
              <td>{{$item->name}}</td>
              <form action="{{route('welcomemail.update')}}" method="POST">
                @csrf
                <td>
                  
                  <select class="form-select" name="mail_template_id">
                    <option selected>Select Template</option>
                  @foreach ($mailtemplates as $template)
                    
                    @if ($welcomemail)
                      <option value="{{$template->id}}" @if($welcomemail->mail_template_id == $template->id) selected @endif>{{$template->name}}</option>
                    @else
                      <option value="{{$template->id}}">{{$template->name}}</option>
                    @endif
                    
                  @endforeach
                </select>
                  
                </td>
                <td><input type="submit" value="Update" class="btn btn-primary"></td>
                <input type="hidden" name="company_id" value="{{$company->id}}">
                <input type="hidden" name="event_type_id" value="{{$item->id}}">
              </form>
            </tr>
              @php
                   $counter++
              @endphp
            @endforeach
            
            
          </tbody>
        </table>

  </div>

  
    
</section>
@endsection
@include('include.notification')