@if(Session::has('message'))
@section('js')
<script>
  var message = "{{ Session::get('message') }}";
  toastr.success(message)
</script>
@endsection
@endif