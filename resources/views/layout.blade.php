
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Music Tutor</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="picture/logo/logo.png"> -->
    <?php session_start(); ?>
    <link href="/assets/css/admin.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="/assets/css/home.css">-->
    @yield('styles')
</head> 

<body class="header-fixed">
  

<div class="wrapper">
    <!--=== Header v6 ===-->
    <div class="header-v6 header-dark-transparent header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="home">
                            <img class="default-logo" src="picture/logo/musicTutor-logo2.png" alt="Logo">
                            <img class="shrink-logo" src="picture/logo/musicTutor-logo1.png" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->

                    <!-- Header Inner Right -->
                    <div class="header-inner-right">
                        <ul class="menu-icons-list">
                            <li class="menu-icons">
                                <i class="menu-icons-style search search-close search-btn fa fa-search"></i>
                                <div class="search-open">
                                    <input type="text" class="animated fadeIn form-control" placeholder="Start searching ...">
                                </div>
                            </li>
                        </ul>    
                    </div>
                    <!-- End Header Inner Right -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <!-- Home -->
                            <li class="dropdown">
                                <a href="index.php">
                                    首頁
                                </a>
                            </li>
                            <!-- End Home -->

                            <!-- Class -->                        
                            <li class="dropdown">
                                <a href="course_type.php">
                                    交流區
                                </a>
                            </li>
                            <!-- End Class -->

                            <!-- Mentor -->
                            <li class="dropdown">
                                <a href="teacher">
                                    指導老師
                                </a>
                            </li>
                            <!-- End Mentor -->

                            <!-- Portfolio -->
                            <li class="dropdown">
                                <a href="forum_detail.php">
                                    討論區
                                </a>
                            </li>
                            <!-- End Portfolio -->

                            <!-- Features -->
                            <li class="dropdown">
                                <a href="">
                                    關於
                                </a>
                            </li>                    
                            <!-- End Features -->

                            <!-- Member -->
                            <?php
                            if (isset($_SESSION['logged_in'])) { 
                            ?>
                            <li class="dropdown mega-menu-fullwidth">
                                <a href="personalProfile.php?userId='<?php echo $_SESSION['userId'];?>'">
                                    <?php echo $_SESSION['userName']; ?>
                                </a>
                            </li>
                            <?php 
                            } 
                            else{
                            ?>

                            <li class="dropdown mega-menu-fullwidth">
                                <a href="signIn">
                                    登入
                                </a>
                            </li>
                            <?php } ?>
                            <!-- End Member -->
                        </ul>
                    </div>
                </div><!--/navbar-collapse-->
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    <!--=== End Header v6 ===-->
</div><!--/wrapper-->        
@yield('content')


<script src="/assets/js/admin.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();        
    });
</script>
@yield('scripts')

<div id="footer" class="container">
      <nav class="navbar navbar-default navbar-fixed-bottom">
          <div class="navbar-inner navbar-content-center">
              <p class="text-muted credit">© 2015 MusicTutor Inc. All rights reserved.</p>
          </div>
      </nav>
    </div>
  </body>
</html>
