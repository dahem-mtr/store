<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.4.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="<?php if(app()->getLocale() == 'en') { echo 'ltr'; } else { echo 'rtl';} ?>">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 
    <title> admin - @yield('title')</title>
    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <!-- <link href="{{ asset('dash/icons/fontawesome/all.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">
  
    <link href="{{ asset('dash/vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">

    @livewireStyles
    @stack('css')

    <style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 20px;
  height:20px;
  -webkit-animation: spin 1s linear infinite; /* Safari */
  animation: spin 1s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>
    <!-- <style>

.c-sidebar {
 
  color: black;
  /* background: red; */
  
}
.c-sidebar .c-sidebar-nav-link:hover, .c-sidebar .c-sidebar-nav-dropdown-toggle:hover {
    color: #fff;
    background: #ddd;
  }
  
</style> -->
  </head>
  <body class="c-app">

  @if(empty($disable_sidebar_and_header))
  @include('dash.components.sidebar')
  @endif
   
    
    <div class="c-wrapper c-fixed-components">
    @if(empty($disable_sidebar_and_header))
    @include('dash.components.header')
    @endif
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              @yield('content')
          </div>
          </div>
        </main>

        @if(empty($disable_sidebar_and_header))
        <footer class="c-footer">
          2021
        </footer>
        @endif
        
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('dash/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}" defer></script>
    <!--[if IE]><!-->
    <script src="{{ asset('dash/vendors/@coreui/icons/js/svgxuse.min.js') }}" defer></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
   
    <script src="{{ asset('dash/vendors/@coreui/utils/js/coreui-utils.js') }}" defer></script>
    <script src="{{ asset('dash/js/main.js') }}" defer></script>
    @livewireScripts
    @stack('scripts')
  </body>
</html>