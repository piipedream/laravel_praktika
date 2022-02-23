<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
        <img src="/img/logo.png" alt="logo" class="mr-5 width="30" height="30"">
        <strong style="margin-left: 5px;">Reparacion</strong>
      </a>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="{{route('home')}}">home</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="{{route('createRequest')}}">создать заявку</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="{{route('requests')}}">заявки</a>
      </nav>

      @if (Auth::check())
      <div class="">
          <span>{{ Auth::user()->name }}</span>
          <a href=""  class="btn btn-outline-primary me-2">User page</a>
          <a href="" class="btn btn-outline-primary me-2">Logout</a>
      </div>
      @else
      <div class="">
          <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('registration') }}"  class="btn btn-outline-light me-2">Registration</a>
      </div>
      @endif

    </div>

  </div>
</header>
