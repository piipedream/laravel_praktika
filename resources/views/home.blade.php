@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<div class="home_img_bg">
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead ">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      </div>
    </div>
  </section>
</div>

  <div class="container">
    <main>
    <!-- START THE FEATURETTES -->

    <div class="row featurette" style="margin-top: 50px;">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. It’ll blow your mind.</h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <img src="/img/1.png" alt="1" class="img-fluid mx-auto" width="830" height="585" >
      </div>
    </div>

    <hr class="featurette-divider mt-5 mb-5">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. See for yourself.</h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="/img/2.png" alt="2" class="img-fluid mx-auto" width="830" height="585" >
      </div>
    </div>

    <hr class="featurette-divider  mt-5 mb-5">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. Checkmate.</h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <img src="/img/3.png" alt="3" class="img-fluid mx-auto" width="830" height="585" >
      </div>
    </div>
    <!-- /END THE FEATURETTES -->
    </div>
  </main>
  </div>
@endsection
