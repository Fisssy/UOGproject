<!-- Bootstrap core CSS -->

<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<link href="assets/css/plugins/nivo-slider.css" rel="stylesheet">
<link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
<link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet">
<link href="assets/css/plugins/remodal.min.css" rel="stylesheet">
<link href="assets/css/plugins/animate.css" rel="stylesheet">
<link href="assets/css/main-style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Icon Font-->
<link href="iconfont/style.css" rel="stylesheet">

</head>

<body class="page__home">
<!-- Loader -->


<!-- //Loader -->
<!-- Header -->
<header class="site-header">
    <div class="mobile-top-panel"></div>
    <div class="mobile-top-panel__fixed">
        <div class="container">
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="menu-navigation navbar-collapse collapse">

                    <!-- Left nav -->
                    <ul class="menu-navigation__list nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>

                        <li><a href="register.php">Register</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                        <li><a href="contacts.html">Contacts</a></li>
                         <li><a href="admin.php">Admin Page</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
            <div class="social-list">
                <span class="social-list__text">Find us here:</span>
                <ul class="social-list__icons">
                    <li><a href="http://www.facebook.com/sharer.php" target="_blank"><i class="icon-facebook-logo"></i></a>
                    </li>
                    <li><a href="https://twitter.com/share" target="_blank"><i class="icon-twitter-letter-logo"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/share" target="_blank"><i class="icon-google-plus"></i></a>
                    </li>
                    <li><a href="http://www.linkedin.com/shareArticle" target="_blank"><i
                                    class="icon-linkedin-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-container_wrap container">
        <div class="header-container__flex">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo.png" alt="Rent a car"></a>
            </div>
            <div class="social-list">
                <span class="social-list__text">Find us here:</span>
                <ul class="social-list__icons">
                    <li><a href="http://www.facebook.com/sharer.php" target="_blank"><i class="icon-facebook-logo"></i></a>
                    </li>
                    <li><a href="https://twitter.com/share" target="_blank"><i class="icon-twitter-letter-logo"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/share" target="_blank"><i class="icon-google-plus"></i></a>
                    </li>
                    <li><a href="http://www.linkedin.com/shareArticle" target="_blank"><i
                                    class="icon-linkedin-logo"></i></a></li>
                </ul>
            </div>
            <div class="phone_block">
                <span><i class="icon-telephone"></i> 8430-1047</span>

            </div>
        </div>
    </div>
    <div class="header-navigation-wrap stickUp">
        <!-- Navbar fixed top -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="menu-navigation navbar-collapse collapse">

                    <!-- Left nav -->
                    <ul class="menu-navigation__list nav navbar-nav">

                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>

                        <li><a href="register.php">Register</a></li>
                        <li><a href="logout.php">Logout</a></li>

                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="admin.php">Admin Page</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div>
    </div>

</header>

<main id="page-content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs__title">Admin Edit User Information</div>
                    <div class="breadcrumbs__items">
                        <div class="breadcrumbs__wrap">
                            <div class="breadcrumbs__item">
                                <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a
                                        href="edituser.php" class="breadcrumbs__item-link">Edit User Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php
        print "<div style=\"text-align: center;\"><p><a href=viewuser.php>View User Information</a></p></div>";
        print "<br>";
        print "<div style=\"text-align: center;\"><p><a href=adduser.php>Add New User</a></p></div>";
        print "<br>";
        print "<div style=\"text-align: center;\"><p><a href=edituser.php>Edit User Information</a></p></div>";
        print "<br>";
        print "<div style=\"text-align: center;\"><p><a href=deleteuser.php>Delete User Information</a></p></div>";
        print "<br>";
        print "<div style=\"text-align: center;\"><p><h3>Edit User Information</p></h3></div>";
        print "<hr/>";
?>
<div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div>
<form action="edituser1.php" method="post">
                        <div class="form-group">
                           <h4><b><center>Please enter the ID you want to edit</center></h4></b>
                           <br>
                           </div>
                           <div class="form-group">
                            <input type="text" name="id" class="form-control" id="inputId" placeholder="Type the ID"></div>
                            <br>
                             <button type="submit" class="btn btn-default">Submit</button>

                        </div>
                     


                  </form>
                </div>
            </div>
        </div>

</main>



<br>

<footer class="site-footer">

    <section class="box-elements">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
                    <figure class="footer_logo"><a href="#"><img src="assets/images/celebrating_icon.png" alt=""></a>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <h5>Company</h5>
                    <ul class="footer-list">
                        <li><a href="about.html">About us</a></li>

                        <li><a href="contacts.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="contact-info">
                        <span class="phone_number"><i class="icon-telephone"></i> 8430-1047</span>

                        <span class="location_info">
							<i class="icon-placeholder-for-map"></i>
							<em>The Kazaka Inc.</em> 
						    <em>5 Hillside Grove,</em> 
						    <em>Hillsgrove.</em> </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-footer__bottom-panel">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="social-list">
                        <ul class="social-list__icons">
                            <li><a href="http://www.facebook.com/sharer.php" target="_blank"><i
                                            class="icon-facebook-logo"></i></a></li>
                            <li><a href="https://twitter.com/share" target="_blank"><i
                                            class="icon-twitter-letter-logo"></i></a></li>
                            <li><a href="https://plus.google.com/share" target="_blank"><i class="icon-google-plus"></i></a>
                            </li>
                            <li><a href="http://www.linkedin.com/shareArticle" target="_blank"><i
                                            class="icon-linkedin-logo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>
</footer>

<!-- //Footer -->


<script src="assets/js/jquery.1.12.4.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
<script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
<script src="assets/js/plugins/swiper.min.js"></script>
<script src="assets/js/plugins/stickup.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>