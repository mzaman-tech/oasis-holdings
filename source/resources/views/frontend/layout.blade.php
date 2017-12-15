<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') | Oasis Holdings Ltd.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
        ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
        
        <!-- Google Fonts
        ============================================ -->		
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet"> 
        
        <!-- All css files are included here
        ============================================ -->    
        <!-- Bootstrap CSS
        ============================================ -->		
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> 
        
        <!-- This core.css file contents all plugins css file
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/core.css')}}">
        
        <!-- Theme shortcodes/elements style
        ============================================ -->  
        <link rel="stylesheet" href="{{asset('assets/css/shortcode/shortcodes.css')}}">
        
        <!--  Theme main style
        ============================================ -->  
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> 

        @stack('top-scripts') 



    </head>  
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]--> 


        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1878674409018784";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


        <!--Main Wrapper Start-->
        <div class="wrapper bg-white fix">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header class="header-area @if(request()->is('/')) fixed @endif">
                    <div class="header-top bg-violet">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-6 hidden-xs">
                                	<div class="header-top-info">
                                		<img src="{{asset('assets/images/icons/h-phone.png')}}" alt="">
                                		<span class="ml-8">+8801730084407</span>
                                	</div>
                                	<div class="header-top-info">
                                		<img src="{{asset('assets/images/icons/h-envelope.png')}}" alt="">
                                		<span class="ml-8">info@oasisholdingsltd.com</span>
                                	</div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 header-right">
                                	<div class="pull_right">
										<a href="#" class="add-property-btn button text-uppercase mr-15 modal-view button" data-toggle="modal" data-target="#propertyModal">ADD Property</a>
                                	</div> 
                                </div>
                            </div>
                        </div>
                    </div>
                	<div id="sticky-header">
						<div class="container">
							<div class="row">
								<div class="col-md-2 col-xs-12">
									<div class="logo"><a href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="OasisHoldings"></a></div>
								</div>
								<div class="col-md-10 hidden-sm hidden-xs">
									<div class="pull_right">
										<nav id="primary-menu">              
											<ul class="main-menu text-right @if(Request::is('/')) text-white @endif">
												<li @if(Request::is('/')) class="active" @endif><a href="{{url('/')}}">HOME</a></li>
                                                <li @if(Request::is('company') || Request::is('management')) class="active" @endif><a href="javascript:void(0)">ABOUT US</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{url('company')}}">COMPANY</a></li>
                                                        <li><a href="{{url('management')}}">MANAGEMENT</a></li>
                                                    </ul>
                                                </li>
												<li @if(Request::is('properties/*')) class="active" @endif><a href="javascript:void(0)">PROPERTIES</a>
													<ul class="dropdown">
                                                        <li><a href="{{url('properties/ongoing')}}">ONGOING</a></li>
                                                        <li><a href="{{url('properties/upcoming')}}">UPCOMING</a></li>
														<li><a href="{{url('properties/completed')}}">COMPLETED</a></li>
													</ul>
												</li>
                                                <li @if(Request::is('career')) class="active" @endif><a href="{{url('career')}}">CAREER</a></li>
												<li @if(Request::is('contact')) class="active" @endif><a href="{{url('contact')}}">CONTACT US</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="{{url('/')}}">HOME</a></li>
                                                <li><a href="javascript:void(0)">ABOUT US</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{url('company')}}">COMPANY</a></li>
                                                        <li><a href="{{url('management')}}">MANAGEMENT</a></li>
                                                    </ul>
                                                </li>
												<li><a href="javascript:void(0)">PROPERTIES</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{url('properties/ongoing')}}">ONGOING</a></li>
                                                        <li><a href="{{url('properties/upcoming')}}">UPCOMING</a></li>
                                                        <li><a href="{{url('properties/completed')}}">COMPLETED</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('career')}}">CAREER</a></li>
												<li><a href="{{url('contact')}}">CONTACT US</a></li>
                                            </ul>
                                        </nav>
                                    </div>					
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->  
                </header>
                <!-- End of Header Area -->


                 @yield('content')


                 <!--Start of Footer Widget-area-->
                <div class="footer-widget-area bg-violet black-bg pb-58">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="footer-logo">
                                <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/footer-logo.png')}}" alt=""></a>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="social-links mt-25 mb-80">
                                    <a href="https://www.facebook.com/OasisHLtd/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/OasisHLdngsLtd" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://plus.google.com/u/0/104964210926958963423" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 hidden-md hidden-sm hidden-xs pl-80 col-xs-12">
                                <div class="single-footer-widget">
                                    <h3 class="text-white text-uppercase mb-17">QUICK LINK</h3>
                                    <ul class="footer-list">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About</a></li>
                                        <li><a href="{{url('/career')}}">Career</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="single-footer-widget pull_right">
                                    <h3 class="text-white text-uppercase mb-21">DHAKA OFFICE</h3>
                                    <div class="footer-contact-info mb-24">
                                        <img src="{{asset('assets/images/icons/f-map.png')}}" alt="">
                                        <span class="pl-40 block">32/3 Sher Shah Suri Road<br>
                                         Mohammadpur, Dhaka</span>
                                    </div>
                                    <div class="footer-contact-info mb-24">
                                        <img src="{{asset('assets/images/icons/f-phone.png')}}" alt="">
                                        <span class="pl-40 block">Telephone : +8801730084407<br>
                                        Telephone : +8801711362209</span>
                                    </div>
                                    <div class="footer-contact-info">
                                        <img src="{{asset('assets/images/icons/f-globe.png')}}" alt="">
                                        <span class="pl-40 block">Email : info@oasisholdingsltd.com<br>
                                        Web : www.oasisholdingsltd.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="single-footer-widget pull_right">
                                    <h3 class="text-white text-uppercase mb-21">KHULNA OFFICE</h3>
                                    <div class="footer-contact-info mb-24">
                                        <img src="{{asset('assets/images/icons/f-map.png')}}" alt="">
                                        <span class="pl-40 block">59, Khan-A- Sabur Road (1st Floor)<br>
                                         Khulna</span>
                                    </div>
                                    <div class="footer-contact-info mb-24">
                                        <img src="{{asset('assets/images/icons/f-phone.png')}}" alt="">
                                        <span class="pl-40 block">Telephone : +8801755585395<br>
                                        Telephone : +8801755585396</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="single-footer-widget pull_right">
                                    <h3 class="text-white text-uppercase mb-21">FACEBOOK PAGE</h3>
                                    <div class="fb-page" data-href="https://www.facebook.com/OasisHLtd/" data-tabs="timeline" data-width="250" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OasisHLtd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OasisHLtd/">Oasis Holdings Ltd</a></blockquote></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget-area-->


                <!-- Start of Footer area -->
                <footer class="footer-area bg-violet text-center pt-27 pb-32 border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-text">
                                    <span class="block">Copyright &copy; {{date("Y")}} <a href="#">Oasis Holdings Ltd</a>. All rights reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer area -->
            </div>   
            <!--End of Bg White--> 
            

        </div>    
        <!--End of Main Wrapper Area--> 
		
		
		<!--Start of Add Property Modal-->
			<div id="quickview-login">
				<!-- Modal -->
				<div class="modal fade" id="propertyModal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="sub-title">Add property</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
							</div>
                			<div class="single-post-area">
								<form action="#" method="post">
									<div class="row">
										<div class="col-md-6">
											<h4 class="details-title text-small mb-12">Property Title</h4>
											<input type="text" name="m-title" placeholder="Enter your title here" class="mb-28">
										</div>
										<div class="col-md-6">
											<h4 class="details-title text-small mb-12">Price</h4>
											<input type="text" name="m-price" placeholder="Price $" class="mb-32">
										</div>
										<div class="col-md-12">
											<h4 class="details-title text-small mb-12">Property Description</h4>
											<textarea name="m-post-comment" cols="30" rows="10" placeholder="Write here" class="mb-12 bg-light"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<h4 class="details-title text-small mb-12">Location</h4>
											<div class="select pb-12">
												<select name="m-location">
													<option>Location here</option>
													<option>Dhaka</option>
													<option>Shylet</option>
													<option>Khulna</option>
													<option>Barishal</option>
													<option>Chittagong</option>
												</select>
											</div>
											<h4 class="details-title text-small mb-12">No. of Bedroom</h4>
											<div class="select">
												<select name="m-bedrooms">
													<option>No. of Bedroom</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="details-title text-small mb-12">No. of Bathroom</h4>
											<div class="select pb-12">
												<select name="m-bathrooms">
													<option>No. of Bathroom</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
												</select>
											</div>
											<h4 class="details-title text-small mb-12">No. of Garage</h4>
											<div class="select">
												<select name="m-garage">
													<option>No. of Garage</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
												</select>
											</div>
										</div>
									</div>
									<div class="text-center">
										<button class="button text-white text-uppercase lemon mt-25">ADD Property</button>
									</div>
								</form>
                			</div>
						</div>	
					</div>
				</div>
			</div>
			<!--End of Add Property Modal-->
			
       
        
        <!-- jquery latest version
		========================================================= -->	
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        
        <!-- Bootstrap framework js
		========================================================= -->			
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		
		
		<!-- Owl Carousel js
		========================================================= -->		
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script> 
        
        
		<!-- Slick Carousel JS
		========================================================= -->			
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
    
        
        <!-- Plugin Js
		========================================================= -->	
        <script src="{{asset('assets/js/plugins.js')}}"></script>


         @stack('bottom-scripts')

        
        <!-- Main js file contents all jQuery plugins activation
		========================================================= -->		
        <script src="{{asset('assets/js/main.js')}}"></script>
        
        
        
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/594a2cce50fd5105d0c820b0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        
        

        
    </body>
</html>