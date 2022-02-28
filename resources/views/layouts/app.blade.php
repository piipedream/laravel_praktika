<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/app.js"></script>
  </head>
  <body>
    @include('inc.header')
    <div class="main_content">
      <div class="container">
        @include('inc.messages')
      </div>
      @yield('content')
    </div>
    @include('inc.footer')
  </body>
</html>
