<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="assest/css/responsive.css">
    <link rel="stylesheet" href="assest/css/jsclass.css">

    <!--Icons-->
    <link href="assest/font/iconfont/icons.css" rel="stylesheet" />
	<link href="assest/font/iconsvg/icons.css" rel="stylesheet" />

    <title>(1) Mdracity</title>
    @yield('head_content')
   

  </head>
  <body id="body">
  <div class="row full-page">
    <!--Start sidebar-->
    <div class="col-xs-3 col-md-3 menu clapsme lg-side-bar">
        <button class="btn menu-btn-o bar-btn-lg"><i class="fa fa-bars"></i></button>
        <button class="btn menu-btn-x bar-btn-lg" style="display:none;font-size: 25px;"><i class="mdi mdi-backburger"></i></button>
        <ul>
          <li><a href="#"><i class="si si-home"></i>الرئيسية</a></li>
          <li><a href="#"><i class="si si-user"></i>صفحتي</a></li>
          <li><a href="#"><i class="si si-calendar"></i>الجدول</a></li>
          <li><a href="#"><i class="si si-settings"></i>الاعدادات</a></li>
        </ul>
    </div>
    <!--End sidebar-->
    <!--Start content-->
    @yield('page_content')
    <!--End Content-->

    <!--Start all page-->
    <div class="col-md-12 col-xs-12 illia-page" >
        <!--Start NavBar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
              <button class="btn bar-btn-sm navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="sm-bar">
                      <li><a href="#"><i class="si si-home"></i>الرئيسية</a></li>
                      <li><a href="#"><i class="si si-user"></i>صفحتي</a></li>
                      <li><a href="#"><i class="si si-calendar"></i>الجدول</a></li>
                      <li><a href="#"><i class="si si-settings"></i>الاعدادات</a></li>
                    </ul>
              </div>
          </nav>
          <!--End NavBar-->

          <!--Start logo and main btn & bottom Nav-->
          <!-- <button class="btn screen-btn ofscreen"><i class="zmdi zmdi-fullscreen-alt"></i></button> -->
           <!-- <button class="btn screen-btn cfscreen" style="display: none;"><i class="mdi mdi-arrow-collapse-all"></i></button> -->
           <h2 class="logo"> Mdracity</h2>
          <button class="btn add-btn"><i class="fa fa-plus"></i></button>
          <button class="btn back-top-btn"><i class="fa fa-angle-up"></i></button>
          <div class="container">
            <div class="bottom-nav">
              <ul>
              @yield('nav_content')
              </ul>
            </div>
            <!--End logo and main btn & bottom Nav-->
        </div>
      </div>
  </div>
  @yield('popup_content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assest/js/jquery-3.3.1.min.js" ></script>
    <script src="assest/js/popper.min.js"></script>
    <script src="assest/js/bootstrap.min.js"></script>
    <script src="assest/js/slidebarleft.js"></script>
    <script src="assest/js/navbottom.js"></script>
    <script src="assest/js/navbarsm.js"></script>
    <script src="assest/plugin/adjustscreen/adjustscreen.js"></script>
    @yield('script_content')
  </body>
</html>



