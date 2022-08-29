<nav class="navbar navbar-expand-lg bg-light fixed-top smty-navmenu">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('begin')}}"><img src="{{ asset('assets/images/smarty_simple.png')}}" class="smty-logo"  alt="SMarty - Stereotyped-based" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SMarty
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('pappers')}}">SMarty Modeling</a></li>
              <li><a class="dropdown-item" href="{{route('pappers')}}">Smarty Process</a></li>
              <li><a class="dropdown-item" href="{{route('pappers')}}">Smarty Profile</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @lang('site.theory_ref')
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('pappers')}}">@lang('site.theory_ref_published_pappers')</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown d-block d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fi fi-@lang('site.flag') mx-2"></i>@lang('site.lang-name')
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('BR')}}"><i class="fi fi-br"></i> Português (pt-BR)</a></li>
              <li><a class="dropdown-item" href="{{route('EN')}}"><i class="fi fi-us"></i> English (en-US)</a></a></li>
            </ul>
          </li>



        </ul>
          <!-- SELECT LANGUAGE AND SHOW SELECTED LANGUAGE -->
          <div class="btn-group dropstart d-none d-sm-block">
            <button type="button" class="btn dropdown-toggle btn-g" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fi fi-@lang('site.flag') mx-2"></i>@lang('site.lang-name')
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('BR')}}"><i class="fi fi-br"></i> Português (pt-BR)</a></li>
              <li><a class="dropdown-item" href="{{route('EN')}}"><i class="fi fi-us"></i> English (en-US)</a></a></li>
            </ul>
          </div>
          <!-- /SELECT LANGUAGE -->
      </div>
    </div>
  </nav>
  