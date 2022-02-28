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
        @can('admin')
          <a class="me-3 py-2 text-white text-decoration-none" href="{{route('request_data')}}">заявки</a>
        @endcan
      </nav>

      @if (Auth::check())
      <div class="">
          <span style="color: white;">{{ Auth::user()->login }}</span>
          <a href="{{ route('user.private') }}"  class="btn btn-outline-light me-2">User page</a>
          <a href="{{ route('user.logout') }}" class="btn btn-outline-light me-2">Logout</a>
      </div>
      @else
      <div class="">
          <a href="{{ route('user.login') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('user.registration') }}"  class="btn btn-outline-light me-2">Registration</a>
      </div>
      @endif

    </div>

  </div>
</header>
