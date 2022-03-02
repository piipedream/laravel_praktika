@extends('layouts.app')

@section('title-block')One request @endsection

@section('content')

<div class="alert alert-secondary container one_request">
  <p>login: {{$data->login}}</p>
  <p>Адрес: {{$data->address}}</p>
  <p>Описание: </p>
  <p>{{$data->message}}</p>
  <p>Цена: {{$data->price}}</p>

  @if ( $data->image != null )
    <h3>Image:</h3>
    <img style="max-width: 100%" src="{{asset("storage/image/$data->image")}}" alt="image">
  @endif
  <br>
  @can('admin')
  <a href="{{route('request_delete', $data->id)}}">
    <button class="btn mt-3 btn-danger show_confirm">Удалить</button>
  </a>
  @endcan
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var login = $(this).data("login");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script> -->

@endsection
