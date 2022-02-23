@extends('layouts.app')

@section('title-block')Создать заявку@endsection

@section('content')
<div class="parent_form container">
<form action="#" method="post" enctype="multipart/form-data" class="text-left createRequest">
  @csrf

  <input name="user_id" id="user_id" style="display: none" value="">

  <div class="form-group">
    <label for="name" class="mb-2">Адрес</label>
    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="">
  </div>

  <div class="mt-3 form-group">
    <label for="message" class="mb-2">Описание</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>

  <div class="mt-3 form-group">
    <label for="subject" class="mb-2">Максимальная цена</label>
    <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
  </div>

  <div class="form-group mt-3">
    <label for="beforeImage">Image</label>
    <input type="file" class="form-control-file" id="beforeImage" name="beforeImage">
  </div>

  <button type="submit" class="btn mt-3 btn-primary">Добавить</button>
</form>
</div>
@endsection
