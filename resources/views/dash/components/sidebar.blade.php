<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      
         <p   class="font-weight-bold p-2 align-self-center" style="font-size: 19px;">{{ __('dash/components/sidebar.dashboard')}}</p>

      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item " ><a class="c-sidebar-nav-link" href="{{route('users.index')}}">
        <i class="c-sidebar-nav-icon cil-user"></i> {{ __('dash/components/sidebar.users') }} </a></li>
   
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon cil-airplay"></i>      Base</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span class="c-sidebar-nav-icon"></span> <i class="c-sidebar-nav-icon cil-home"></i>  Breadcrumb</a></li>
           
          </ul>
        </li>
      </ul>

      <!-- <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button> -->
    </div>