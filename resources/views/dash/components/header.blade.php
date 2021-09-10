<header class="c-header c-header-light c-header-fixed c-header-with-subheader  justify-content-between">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg cil-menu"></i>
        </button>
        <ul class="c-header-nav  mr-4  ml-4">

          <div class="dropdown ">
            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             {{Config::get('app.locale') == 'ar' ? 'ar' : 'en'}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item " href="{{ route('lang', 'ar') }}">ar</a>
              <a class="dropdown-item" href="{{ route('lang', 'en') }}">en</a>
            
            </div>
          </div>
       
          
        <i class="c-icon cil-bell mr-4  ml-4"></i>

       
          <li class="c-header-nav-item dropdown mr-4 ml-4"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('dash/assets/img/avatars/6.jpg') }}" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header  py-2"><strong>{{ __('dash/components/header.account') }}</strong></div><a class="dropdown-item" href="#">
              <i class="c-icon cil-user"></i>  ملفك الشخصي  &nbsp;</a>
             
            </div>
            
          </li>
        </ul>
        

        
          <!-- Breadcrumb-->
        <div class="c-subheader px-3">
          <ol class="breadcrumb border-0 m-0">
          @if (Request::is('admin') )  
            <li class="breadcrumb-item active"> {{ __('dash/min.dashboard') }}</li>
            @else
            <li class="breadcrumb-item"><a href="{{route('admin')}}"> {{ __('dash/min.dashboard') }}</a></li>
            @yield('breadcrumb-items')
          </ol>
        </div>  
    @endif

      </header>