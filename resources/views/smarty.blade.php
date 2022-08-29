@extends('layouts.master')

@section('content')

<div style="margin-bottom: 100px"></div>

<div class="container-fluid fadeIn ">
    <div class="col-md-12"  >
        <img src="{{asset('assets/images/logo_smarty_modeling.png')}}" alt="">  
    </div>
    <hr>
    <h3>@lang('site.slide-smarty-name')</h3>

    <h5>@lang('site.intro')</h5>
    <br>
    <h5 style="text-align:justify">@lang('site.smarty-paragraph1')</h5>
</div>

@endsection