@extends('layouts.app')

<!-- @section('title-block')One request@endsection -->

@section('content')

<div class="alert alert-secondary container one_request">
  <p>Адрес: </p>
  <p>Описание: </p>
  <p>This is a wider card with supporting text
    below as a natural lead-in to additional content.
    This content is a little bit longer.</p>
  <p>Цена: </p>

  <img src="/img/one_request.png" alt="photo">
  <br>
  <a href="#"><button class="btn mt-3 btn-danger show_confirm">Удалить</button></a>
</div>

@endsection
