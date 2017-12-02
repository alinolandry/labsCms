
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wp.hostlin.com/economy-plus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2017 09:49:31 GMT -->
<head>
	<meta charset="UTF-8">
	<title>LABS CMS | V 1.0</title> 

	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

</head>
<body>

<div class="boxed_wrapper">

<header class="top-bar">
    <div class="container">
        <div class="clearfix">
            <ul class="top-bar-text float_left">
                <li><i class="icon-technology-1"></i>Phone +123-456-7890</li>
                <li><i class="icon-note"></i>Mail@Economyteam.com</li>
            </ul>
            <ul class="social float_right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
    </div>
</header>


<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="main-logo">
                    <a href="index-2.html"><img src="images/logo/logo.png" alt=""></a>
                </div>
            </div>

            <div class="col-md-6 menu-column">
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">

                            <li class="dropdown"><a href="{{ route('home') }}">Home</a> </li>

                            <li class="dropdown"><a href="{{ route('about') }}">About us</a></li>

                            <li class="dropdown"><a href="{{ route('service') }}">services</a> </li>

                            <li class="dropdown"><a href="{{ route('blog') }}">blog</a></li>

                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                        </ul>

                        <ul class="mobile-menu clearfix">

                            <li class="dropdown"><a href="{{ route('home') }}">Home</a></li>

                            <li class="dropdown"><a href="{{ route('about') }}">About us</a></li>

                            <li class="dropdown"><a href="{{ route('service') }}">services</a></li>

                            <li class="dropdown"><a href="{{ route('blog') }}">blog</a></li>

                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-md-2">
                <div class="right-column">
                    <div class="right-area">
                       <div class="link_btn float_right">
                           <a href="#" class="thm-btn">GET A Quote</a>
                       </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@yield('content')



<footer class="main-footer">
    
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="images/logo/logo2.png" alt=""></a></figure>
                                
                                <div class="widget-content">
                                    <div class="text"><p>Economy+ is a global consulting firm with a twist. We bring big ideas and challenge the norm. We work with our clients, not at them.</p> </div>
                                    
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget posts-widget">
                                <div class="section-title">
                                    <h3>latest news</h3>
                                </div>
                                <div class="widget-content">
                                    <!--Post-->
                                    <div class="post">
                                        <div class="content">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consec tetur adipi scing elit.</a></h4>
                                        </div>
                                        <div class="time">March 16, 2017</div>
                                    </div>
                                    <!--Post-->
                                    <div class="post">
                                        <div class="content">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consec tetur adipi scing elit.</a></h4>
                                        </div>
                                        <div class="time">March 16, 2017</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="section-title">
                                    <h3>Our Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="service-single.html">Business Growth</a></li>
                                        <li><a href="service-single.html">Market Research</a></li>
                                        <li><a href="service-single.html">Financial Advise</a></li>
                                        <li><a href="service-single.html">Sales & Trading</a></li>
                                        <li><a href="service-single.html">Consulting</a></li>
                                        <li><a href="service-single.html">Risk Management</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <div class="section-title">
                                    <h3>instagram</h3>
                                </div>
                                
                                <div class="footer-widget gallery-widget">
                                    <div class="row clearfix">
                                        <figure class="image">
                                            <img src="images/resource/fi1.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        <figure class="image">
                                            <img src="images/resource/fi2.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        <figure class="image">
                                            <img src="images/resource/fi3.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        <figure class="image">
                                            <img src="images/resource/fi4.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        <figure class="image">
                                            <img src="images/resource/fi5.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        <figure class="image">
                                            <img src="images/resource/fi6.jpg" alt="">
                                            <div class="link"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                                        </figure>

                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                
             </div>
         </div>
     </div>
     
     <!--Footer Bottom-->
     <section class="footer-bottom">
        <div class="container">
            <div class="pull-left copy-text">
                <p>Copyrights © 2017 All Rights Reserved by <a href="#"> Y-Note </a></p>
                
            </div><!-- /.pull-right -->
            <div class="pull-right get-text">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#"> Login</a></li>
                </ul>
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </section>
     
</footer>

<!-- Scroll Top Button -->
	<button class="scroll-top tran3s color2_bg">
		<span class="fa fa-angle-up"></span>
	</button>
	<!-- pre loader  -->
	<div class="preloader"></div>


	<!-- jQuery js -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui.js"></script>
	<!-- owl carousel js -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- jQuery validation -->
	<script src="js/jquery.validate.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 
	<script src="js/gmap.js"></script>
	<!-- mixit up -->
	<script src="js/wow.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
	<script src="js/menuzord.js"></script>

	<!-- revolution slider js -->
	<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

	<!-- fancy box -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.polyglot.language.switcher.js"></script>
	<script src="js/nouislider.js"></script>
	<script src="js/jquery.bootstrap-touchspin.js"></script>
	<script src="js/SmoothScroll.js"></script>
    <script src="js/isotope.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/imagezoom.js"></script>	
	<script id="map-script" src="js/default-map.js"></script>
	<script src="js/custom.js"></script>

</div>
	
</body>
</html>
