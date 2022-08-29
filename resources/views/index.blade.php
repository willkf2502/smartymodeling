@extends('layouts.master')

@section('content')

<!-- glider -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<!-- /.glider -->
<section class="container">

  <div class="glider-contain">
    <div class="glider">
      
      <div class="glider-item">

          <div class="col-md-12 row">
            <div class="smty-carousel-image col-md-12" style="padding: 50px" >
              <img src="{{asset('assets/images/logo_smarty_modeling.png')}}" alt="">  
            </div>
            <div class="col-md-12 text-center">
              <h3>@lang('site.slide-smarty-name')</h3>
              <h5>@lang('site.intro')</h5>
              <br />
              <button class="btn btn-primary"> <i class="fa-solid fa-angles-right mx-2"></i> @lang('site.read-more')</button>
              <br />
              <br />
            </div>
          </div>
          
      </div>


      <div class="glider-item">
        
        <div class="col-md-12 row" style="padding: 50px">

          <div class="col-md-4" id="second" >
            <img src="@lang('site.img-spl')" alt="">
          </div>

          <div class="col-md-8 text-left">
            <h3>@lang('site.spl-title')</h3>
            <hr>
            <h5>@lang('site.spl-description')</h5>
            <br />   
            <br />         
            <button class="btn btn-primary"> <i class="fa-solid fa-angles-right mx-2"></i> @lang('site.read-more')</button>
            <br />
          </div>
        </div>

      </div>

    <div class="glider-item">
        
      <div class="col-md-12 row" style="padding: 50px">

        <div class="col-md-4" id="second" >
          <img src="{{asset('assets/images/papper.jpg')}}" alt="">
        </div>

        <div class="col-md-8 text-left">
          <h3>@lang('site.din-title')</h3>
          <hr>
          <h5>@lang('site.din-description')</h5>
          <br />   
          <br />         
          <a class="btn btn-success" href="http://www.din.uem.br/" target="_blank"> <i class="fa-solid fa-globe mx-1"></i> @lang('site.site-visit')</a>
          <br />
        </div>
      </div>

    </div>
  </div>
  
    <button aria-label="Previous" class="glider-prev">«</button>
    <button aria-label="Next" class="glider-next">»</button>
    <div role="tablist" class="dots"></div>
  </div>
    
</section>

<script>
  var min = 0;
  var max = 3;
  var next = 1;

  var glider = new Glider(document.querySelector('.glider'), {
    slidesToShow: 1,
    dots: '.dots',
    draggable: true,
    duration: 0.5,
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
  });


//Change the slide each 10 secs
setInterval(() => {

  if(next >= max){
    next = 0;
  }
  
  glider.scrollItem(next);
  next = next+1;

}, 10 * 1000);

</script>

@endsection