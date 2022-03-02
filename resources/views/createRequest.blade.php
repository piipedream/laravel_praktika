@extends('layouts.app')

@section('title-block')Создать заявку@endsection

@section('content')

<div class="parent_form container">
<form action="{{ Route('request_form') }}" method="post" enctype="multipart/form-data" class="text-left createRequest">
  @csrf

  <div class="form-group">
    <label for="name" class="mb-2">Введите login</label>
    <input type="text" name="login" placeholder="Введите login" id="login" class="form-control" >
  </div>

  <div class="mt-3 form-group">
    <label for="name" class="mb-2">Адрес</label>
    <input type="text" name="address" placeholder="Введите адрес" id="address" class="form-control">
  </div>

  <div class="mt-3 form-group">
    <label for="message" class="mb-2">Описание</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>

  <div class="mt-3 form-group">
    <label for="subject" class="mb-2">Максимальная цена</label>
    <input type="text" name="price" placeholder="Введите цену" id="price" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="Image">Image</label>
    <input type="file" class="form-control-file" id="Image" name="Image">
  </div>

  <button type="submit" class="btn mt-3 btn-primary">Добавить</button>
</form>
</div>
@endsection
