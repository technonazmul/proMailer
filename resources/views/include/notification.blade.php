@if(Session::has('message'))
@section('js')
<script>
 $(document).ready(function() {
                var message = "{{ Session::get('message') }}";
                toastr.success(message);
            });
</script>
@endsection
@endif