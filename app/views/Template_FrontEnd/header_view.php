<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>
        <title>Margo | Anasayfa</title>

        
        <meta charset="utf-8">

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Page Description and Author -->
        <meta name="description" content="Margo - Responsive HTML5 Template">
        <meta name="author" content="iThemesLab">

        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="<?php echo SITE_FRONT_ASSETS; ?>/css/bootstrap.min.css" type="text/css" media="screen">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/font-awesome.min.css" type="text/css" media="screen">

        <!-- Slicknav -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/slicknav.css" media="screen">

        <!-- Margo CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/style.css" media="screen">

        <!-- Responsive CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/responsive.css" media="screen">

        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/animate.css" media="screen">

        <!-- Color CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/red.css" title="red" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/jade.css" title="jade" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/green.css" title="green" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/blue.css" title="blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/beige.css" title="beige" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/cyan.css" title="cyan" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/orange.css" title="orange" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/peach.css" title="peach" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/pink.css" title="pink" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/purple.css" title="purple" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/sky-blue.css" title="sky-blue" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/colors/yellow.css" title="yellow" media="screen" />

        <!-- Margo JS  -->
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/modernizrr.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/nivo-lightbox.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.appear.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/count-to.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.textillate.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.lettering.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.easypiechart.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/mediaelement-and-player.js"></script>
        <script type="text/javascript" src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.slicknav.js"></script>


  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    </head>

    <body>

        <!-- Full Body Container -->
        <div id="container">


            <!-- Start Header Section -->
            <div class="hidden-header"></div>
            <header class="clearfix">

                <!-- Start Top Bar -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <?php if(session::get("email")){ ?>
                                    <li><a href="#"><i class="fa fa-user"></i> Hoşgeldin,<?php echo session::get("email"); ?> </a>
                                    </li>
                                    <?php } ?>
                                    <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                    </li>
                                </ul>
                                <!-- End Contact Info -->
                            </div>
                            <!-- .col-md-6 -->
                            <div class="col-md-5">
                                <!-- Start Social Links -->
                                <ul class="social-list">
                                    <li>
                                        <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    </li>
                                    <li>
                                        <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                                <!-- End Social Links -->
                            </div>
                            <!-- .col-md-6 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container -->
                </div>
       

                <!-- Start  Logo & Naviagtion  -->
                <div class="navbar navbar-default navbar-top">
                    <div class="container">
                        <div class="navbar-header">
                            <!-- Stat Toggle Nav Link For Mobiles -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- End Toggle Nav Link For Mobiles -->
                            <a class="navbar-brand" href="<?php echo SITE_URL; ?>">
                                <img alt="" src="<?php echo SITE_URL_FIMAGES; ?>/margo.png">
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <!-- Stat Search -->
                            <div class="search-side">
                                <a class="show-search"><i class="fa fa-search"></i></a>
                                <div class="search-form">
                                    <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                        <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                    </form>
                                </div>
                            </div>
                            <!-- End Search -->
                            <!-- Start Navigation List -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="active" href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a class="active" href="index.html">Home Main Version</a>
                                        </li>
                                        <li><a href="index-01.html">Home Version 1</a>
                                        </li>
                                        <li><a href="index-02.html">Home Version 2</a>
                                        </li>
                                        <li><a href="index-03.html">Home Version 3</a>
                                        </li>
                                        <li><a href="index-04.html">Home Version 4</a>
                                        </li>
                                        <li><a href="index-05.html">Home Version 5</a>
                                        </li>
                                        <li><a href="index-06.html">Home Version 6</a>
                                        </li>
                                        <li><a href="index-07.html">Home Version 7</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about.html">About</a>
                                        </li>
                                        <li><a href="services.html">Services</a>
                                        </li>
                                        <li><a href="right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li><a href="left-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shortcodes</a>
                                    <ul class="dropdown">
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="action-box.html">Action Box</a>
                                        </li>
                                        <li><a href="testimonials.html">Testimonials</a>
                                        </li>
                                        <li><a href="latest-posts.html">Latest Posts</a>
                                        </li>
                                        <li><a href="latest-projects.html">Latest Projects</a>
                                        </li>
                                        <li><a href="pricing.html">Pricing Tables</a>
                                        </li>
                                        <li><a href="animated-graphs.html">Animated Graphs</a>
                                        </li>
                                        <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="portfolio-3.html">Portfolio</a>
                                    <ul class="dropdown">
                                        <li><a href="portfolio-2.html">2 Columns</a>
                                        </li>
                                        <li><a href="portfolio-3.html">3 Columns</a>
                                        </li>
                                        <li><a href="portfolio-4.html">4 Columns</a>
                                        </li>
                                        <li><a href="single-project.html">Single Project</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog - right Sidebar</a>
                                        </li>
                                        <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                                        </li>
                                        <li><a href="single-post.html">Blog Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a>
                                </li>
                                </li>
                                <?php if(session::get("email")){ ?>
                                 <li><a href="<?php echo SITE_URL; ?>/login/logout">Çıkış Yap</a>
                                </li>
                                <?php } ?>
                                 
                                 
                            </ul>
                            <!-- End Navigation List -->
                        </div>
                    </div>

                    <!-- Mobile Menu Start -->
                    <ul class="wpb-mobile-menu">
                        <li>
                            <a class="active" href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a class="active" href="index.html">Home Main Version</a>
                                </li>
                                <li><a href="index-01.html">Home Version 1</a>
                                </li>
                                <li><a href="index-02.html">Home Version 2</a>
                                </li>
                                <li><a href="index-03.html">Home Version 3</a>
                                </li>
                                <li><a href="index-04.html">Home Version 4</a>
                                </li>
                                <li><a href="index-05.html">Home Version 5</a>
                                </li>
                                <li><a href="index-06.html">Home Version 6</a>
                                </li>
                                <li><a href="index-07.html">Home Version 7</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.html">About</a>
                                </li>
                                <li><a href="services.html">Services</a>
                                </li>
                                <li><a href="right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li><a href="left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shortcodes</a>
                            <ul class="dropdown">
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="action-box.html">Action Box</a>
                                </li>
                                <li><a href="testimonials.html">Testimonials</a>
                                </li>
                                <li><a href="latest-posts.html">Latest Posts</a>
                                </li>
                                <li><a href="latest-projects.html">Latest Projects</a>
                                </li>
                                <li><a href="pricing.html">Pricing Tables</a>
                                </li>
                                <li><a href="animated-graphs.html">Animated Graphs</a>
                                </li>
                                <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="portfolio-3.html">Portfolio</a>
                            <ul class="dropdown">
                                <li><a href="portfolio-2.html">2 Columns</a>
                                </li>
                                <li><a href="portfolio-3.html">3 Columns</a>
                                </li>
                                <li><a href="portfolio-4.html">4 Columns</a>
                                </li>
                                <li><a href="single-project.html">Single Project</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog - right Sidebar</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                                </li>
                                <li><a href="single-post.html">Blog Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <!-- Mobile Menu End -->

                </div>
                <!-- End Header Logo & Naviagtion -->

            </header>
            <!-- End Header Section -->