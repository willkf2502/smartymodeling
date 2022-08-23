<nav class="navbar navbar-expand-lg bg-light fixed-top smty-navmenu">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/smarty_simple.png')}}" class="smty-logo"  alt="SMarty - Stereotyped-based" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">@lang('menu.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">@lang('menu.smarty')</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @lang('menu.theory_ref')
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">@lang('menu.theory_ref_published_pappers')</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
          <!-- SELECT LANGUAGE AND SHOW SELECTED LANGUAGE -->
          <div class="btn-group dropstart">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fi fi-@lang('menu.flag') mx-2"></i>@lang('menu.name')
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
  
  <div style="margin-bottom: 70px"></div>