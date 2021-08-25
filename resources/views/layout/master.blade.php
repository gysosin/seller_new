<!DOCTYPE html>
<html lang="en">

<head>
  @include('master.head')
  @yield('css')
</head>

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">
    @include('master.main_menu')

    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @include('master.nav')
  <!-- Loading ends -->
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
 
 
    @yield('body')
    <!-- *************
				************ Main container end *************
				************* -->


  </div>

  <!-- *************
				************ Required JavaScript Files *************
			************* -->
  @include('master.script')
  @yield('js')
</body>

</html>