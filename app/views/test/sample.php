<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.codbits.com/dash.1.4/navbar/visible.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 21 Jan 2015 06:39:35 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dash, responsive bootstrap dashboard navbar">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, dashboard, bootstrap, front-end, frontend, web development, normal, navbar">
    <meta name="author" content="CodBits">

    <title>Dash &middot; Responsive Bootstrap Dashboard Visible Navbar</title>

    <!-- Bootstrap core and other CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"  rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dash.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elemdnts and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../../apple-touch-icon.html">
    <link rel="icon" href="../../favicon.html">
  </head>

  <body>
    <!-- This div fix the hidden overflow issue on mobile devices -->
    <div class="main-wrap">
      <!-- Dash Navbar Top 
      Available versions: dnl-visible, dnl-hidden -->
      <nav class="navbar navbar-static-top dash-navbar-top dnl-visible">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dnt-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="fa fa-ellipsis-v"></span>
            </button>
            <button class="dnl-btn-toggle">
              <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">DASH <span>beta</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="dnt-collapse">
            <!-- This dropdown is for avatar -->
            <ul class="nav navbar-nav navbar-right navbar-avatar">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="img/avatar.jpg" class="dnt-avatar" alt="Reardestani avatar"></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Standard <span>go pro</span></a></li>
                  <li><a href="#">Upload</a></li>
                  <li class="active"><a href="#">Active link</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-right dnt-navbar-form" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn"><span class="fa fa-search"></span></button>
            </form>  
            <!-- This dropdown is for normal links -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Support</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Link 1 <span>LOL</span></a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                </ul>
              </li>
            </ul>        
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav> <!-- /.navbar -->

      <!-- Dash Navbar Left 
      Available versions: dnl-visible, dnl-hidden -->
      <div class="dash-navbar-left dnl-visible">
        <p class="dnl-nav-title">Home</p>
        <ul class="dnl-nav">
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseStatistics" aria-expanded="false" aria-controls="collapseStatistics">
              <span class="glyphicon glyphicon-stats dnl-link-icon"></span>
              <span class="dnl-link-text">Statistics</span>
              <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="dnl-sub-one collapse" id="collapseStatistics">
              <li>
                <a href="#">
                  <span class="fa fa-clock-o dnl-link-icon"></span>
                  <span class="dnl-link-text">Daily</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-history dnl-link-icon"></span>
                  <span class="dnl-link-text">Annual</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-folder-open dnl-link-icon"></span>
              <span class="dnl-link-text">Pages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-comment dnl-link-icon"></span>
              <span class="dnl-link-text">Comments</span>
              <span class="badge">4</span>
            </a>
          </li>
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseLevelOne" aria-expanded="false" aria-controls="collapseLevelOne">
              <span class="fa fa-sort-amount-desc dnl-link-icon"></span>
              <span class="dnl-link-text">Dropdown level 1</span>
              <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="dnl-sub-one collapse" id="collapseLevelOne">
              <li>
                <a href="#">
                  <span class="fa fa-slack dnl-link-icon"></span>
                  <span class="dnl-link-text">Level 1</span>
                </a>
              </li>
              <li>
                <a class="collapsed" data-toggle="collapse" href="#collapseLevelTwo" aria-expanded="false" aria-controls="collapseLevelTwo">
                  <span class="fa fa-level-down dnl-link-icon"></span>
                  <span class="dnl-link-text">Dropdown level 2</span>
                  <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
                </a>
                <!-- Dropdown level two -->
                <ul class="dnl-sub-two collapse" id="collapseLevelTwo">
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi dnl-link-icon"></span>
                      <span class="dnl-link-text">Level 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi dnl-link-icon"></span>
                      <span class="dnl-link-text">Level 2</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="fa fa-wifi dnl-link-icon"></span>
                      <span class="dnl-link-text">Level 2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-slack dnl-link-icon"></span>
                  <span class="dnl-link-text">Level 1</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <p class="dnl-nav-title">Filter</p>
        <ul class="dnl-nav">
          <li>
            <a href="#">
              <span class="fa fa-image dnl-link-icon"></span>
              <span class="dnl-link-text">Image</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-video-camera dnl-link-icon"></span>
              <span class="dnl-link-text">Video</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-folder-open dnl-link-icon"></span>
              <span class="dnl-link-text">Audio</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-file-text dnl-link-icon"></span>
              <span class="dnl-link-text">File</span>
              <span class="badge">4</span>
            </a>
          </li>
          <li class="active">
            <a href="#">
              <span class="fa fa-link dnl-link-icon"></span>
              <span class="dnl-link-text">Active link</span>
            </a>
          </li>
        </ul>
        <p class="dnl-nav-title">Category</p>
        <ul class="dnl-nav">
          <li>
            <a class="collapsed" data-toggle="collapse" href="#collapseCategoryAll" aria-expanded="false" aria-controls="collapseCategoryAll">
              <span class="glyphicon glyphicon-tags dnl-link-icon"></span>
              <span class="dnl-link-text">All</span>
              <span class="fa fa-angle-up dnl-btn-sub-collapse"></span>
            </a>
            <!-- Dropdown level one -->
            <ul class="dnl-sub-one collapse" id="collapseCategoryAll">
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                  <span class="dnl-link-text">UI</span>
                  <span class="badge">4</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                  <span class="dnl-link-text">Design</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                  <span class="dnl-link-text">App</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="fa fa-dot-circle-o dnl-link-icon"></span>
                  <span class="dnl-link-text">Homepage</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-dot-circle-o dnl-link-icon"></span>
              <span class="dnl-link-text">Popular</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-dot-circle-o dnl-link-icon"></span>
              <span class="dnl-link-text">Handpicked</span>
            </a>
          </li>
        </ul>
      </div> <!-- /.dash-navbar-left -->

      <!-- Enter your page content below here
      Available effects: dnl-push, dnl-overlay, dnl-opacity
      Available versions: dnl-visible, dnl-hidden -->
      <div class="content-wrap dnl-visible" data-effect="dnl-push">
        <div class="container-fluid">
        	<!-- here is content block ----- -->	
          <h2 class="page-header">Here is content </h2>

         
          
          <!-- end here is content block ----- -->
        </div>
      </div> <!-- /.content-wrap -->
    </div> <!-- /.main-wrap -->
    
    <!-- Le javaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.touchSwipe.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo.js')?>"></script>    

  </body>

<!-- Mirrored from html.codbits.com/dash.1.4/navbar/visible.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 21 Jan 2015 06:39:39 GMT -->
</html>