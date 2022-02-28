@extends('layouts.app')

@section('title-block')User page @endsection

@section('content')
@foreach($data as $el)
  <div class="album mt-4 mb-4 bg-light">
    <div class="container">
      <div class="container">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <p>login: {{$el->login}}</p>
              <p>Адрес: {{$el->address}}</p>
              <p class="card-text">{{$el->message}}</p>
              <p>Цена: {{$el->price}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('request_data_one', $el->id)}}" class="btn btn-sm btn-outline-secondary text-decoration-none">Посмотреть</a>
                </div>
                <small class="text-muted">{{$el->created_at}}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
