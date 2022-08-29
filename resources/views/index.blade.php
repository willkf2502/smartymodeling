@extends('layouts.master')

@section('content')

<!-- glider -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<!-- /.glider -->
<div style="margin-bottom: 80px"></div>
<section class="container-fluid" style="padding:25px">
  
      
      <div class="glider-item">

        <div class="col-md-12 row" style="padding: 10px">

          <div class="col-md-6 text-left">
            <h1 class="smty-h1">@lang('site.slide-smarty-name')</h1>
            <br />
            <h5>@lang('site.intro')</h5>
            <br />   
            <br />         
            <button class="btn btn-primary btn-gg"> <i class="fa-solid fa-angles-right mx-2"></i> @lang('site.read-more')</button>
            <br />
          </div>

          <div class="col-md-6 text-end" id="second" >
            <img src="{{asset('assets/images/smarty-uml.png')}}" alt="">  
          </div>

        </div>

        <br />

        <div class="col-md-12 row" style="padding: 10px; margin-top: 20px; margin-bottom:40px">        
        </div>

        <div class="glider-item">
        
            <div class="col-md-12 row" style="padding: 10px">

                <div class="col-md-4 text-begin" id="second" >
                  <img src="@lang('site.img-spl')" alt="">
                </div>

                <div class="col-md-8 text-left">
                  <h1 class="smty-h1">@lang('site.spl-title')</h1>
                  <br />
                  <h5>@lang('site.spl-description')</h5>
                  <br />   
                  <br />         
                  <button class="btn btn-primary btn-gg"> <i class="fa-solid fa-angles-right mx-2"></i> @lang('site.read-more')</button>
                  <br />
                </div>
            </div>
    
        </div>
          
    
</section>


@endsection