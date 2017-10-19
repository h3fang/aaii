@extends('layouts.main')

@section('title', 'Home')

@section('stylesheet')
<style type="text/css">
  /* CUSTOMIZE THE CAROUSEL
  -------------------------------------------------- */
  
  /* Carousel base class */
  .carousel {
    margin-bottom: 3rem;
    overflow: hidden;
  }
  
  /* Since positioning the image, we need to help out the caption */
  .carousel-caption {
    z-index: 10;
    bottom: 1rem;
    /*background-color: #666;*/
    /*opacity: 0.3;*/
  }
  
  /* Declare heights because of positioning of img element */
  .carousel-item {
    height: 32rem;
    background-color: #aaa;
  }
  
  .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
  }
  
  /* MARKETING CONTENT
  -------------------------------------------------- */
  
  /* Center align the text within the three columns below the carousel */
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
  .marketing h2 {
    font-weight: normal;
  }
  .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
  }
  
  /* Featurettes
  ------------------------- */
  
  .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  }
  
  /* Thin out the marketing headings */
  .featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -.05rem;
  }
  
  
  /* RESPONSIVE CSS
  -------------------------------------------------- */
  
  @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      line-height: 1.4;
    }
  
    .featurette-heading {
      font-size: 50px;
    }
  }
  
  @media (min-width: 62em) {
    .featurette-heading {
      margin-top: 7rem;
    }
  }
</style>
@endsection

@section('content')
  <div id="main-carousel" class="carousel slide w-100" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#main-carousel" data-slide-to="1"></li>
      <li data-target="#main-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/image/logo1.svg" alt="First slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-left">
            <h3>Example headline.</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/image/logo1.svg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-left">
            <h3>Example headline.</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/image/logo1.svg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-left">
            <h3>Example headline.</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<div class="container">
  <h1>Welcome to AAII Lab!</h1>
  <p> {{ 'HTTP_USER_AGENT: ' . $_SERVER['HTTP_USER_AGENT'] }} </p>
  <p> {{ 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR'] }} </p>
  <p> {{ 'REQUEST_TIME: ' . $_SERVER['REQUEST_TIME'] }} </p>
  <?php
  $body = file_get_contents('php://input');
  if ($body != '') {
    print("\n$body\n\n");
  }
  ?>
  <p><a class="btn btn-primary btn-lg" href="/" role="button">Learn more &raquo;</a></p>
</div>

<div class="container marketing">
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>
  
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>
  
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>
  
  <hr class="featurette-divider">
</div>

@endsection

@section('javascript')
<script>
  // $('.carousel').carousel({
  //   interval: 5000
  // })
</script>
@endsection