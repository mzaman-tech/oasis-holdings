@extends('frontend.layout')

@section('title', 'Home')

@push('top-scripts')

    	<!-- Modernizr JS -->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

@endpush

@section('content')


                <!-- Start of Background Area -->
                <div class="background-area bg-overlay-dark-3 fixed-bg-2" id="particles-js">
					<div class="banner-content static-text">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="text-content-wrapper full-width">
										<div class="text-content text-center">
											<h1 class="title1 cd-headline letters type text-uppercase text-white mt-60 mb-20">
												<span class="tlt block" data-in-effect="flipInY" data-out-effect="flipOutY">WANT A DREAM HOME !</span>
												<span class="tlt block" data-in-effect="tada" data-out-effect="fadeOut">Oasis Holdings ALWAYS WITH YOU</span>
											</h1>
                                            <p class="sub-title hidden-xs text-white"> Oasis Holdings is well known for its quality and its features as it does not compromise with its quality, and its features are liked by its clients.</p>
											<div class="banner-readmore mt-22">
												<a class="button slider-btn lemon" href="#about-section">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!--End of Background Area-->

                <!--Start of About Area-->
                <div class="about-area mt-120 pb-90 banner-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">KNOW ABOUT <span class="text-color">Oasis Holdings</span></h2>
                                </div>
                            	<p class="33"><span class="text-dark text-uppercase">Oasis Holdings</span> will change the way you think about quality. Highly comfortable service, friendly staff and best prices provide you an experience that will be memorable for whole life. </p>
                            	<p class="34"><br /></p>
                            	<div class="link mb-13">
                            		Click <a href="{{ url('/company') }}">here</a> to know more about us.
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of About Area -->
                <br />
                <br />
                <!--Start of Service Area-->
                <div class="service-area pb-120">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31 text-center">
                                    <h2 class="uppercase mb-20">OUR SERVICES</h2>
                                    <p class="pb-19">We offer residential real estate services to individuals. Some of our real estate services include property management, maintenance & selling of apartments. The best interests of our clients will always come first and we will place the clients’ concerns ahead of our own in each and every transaction, as we are dedicated to the development of long-term client relationships! Our team-approach philosophy ensures your needs are important to each and every member of our organization.</p>
                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                				<div class="single-service pull_left hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="{{asset('assets/images/service/1-s.jpg')}}" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Sale Property</a></h4>
                						<p class="mr-10">For those who intend to sell their property if you allow us we make sure you get optimum price for your valued asset.</p>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                				<div class="single-service hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="{{asset('assets/images/service/2-s.jpg')}}" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Buy Property</a></h4>
                						<p class="mr-10">For those who intend to buy their dream apartment, knock us, we can provide the best thing in minimum price.</p>
                					</div>
                				</div>
                			</div>
                			<div class="col-lg-4 hidden-md hidden-sm col-xs-12">
                				<div class="single-service pull_right hover-effect-one">
                					<div class="single-service-image pull_left mr-20">
                						<a class="block white-hover" href="properties-details.html"><img src="{{asset('assets/images/service/3-s.jpg')}}" alt=""></a>
                					</div>
                					<div class="single-service-text fix">
                						<h4 class="mb-14"><a href="properties-details.html">Rent Property</a></h4>
                						<p class="mr-10">For those who intend to rent apartment, we can arrange that too in our completed projects.</p>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Service Area-->

                  <!--Start of Featured Property Area-->
                  <div class="property-area pb-120 bg-light">
                  	<div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="section-title mb-38 mt-31 text-center">
                                      <h2 class="uppercase mb-25">FEATURED PROPERTY</h2>
                                      <p class="pb-15">From our ongoing projects, these are some of our featured projects which we are expecting to be completed within couple of years. We give the best thing in least price.</p>
                                  </div>
                              </div>
                          </div>
                  		<div class="row">
                        @foreach($properties as $property)
          							<div class="col-lg-4 col-md-6 col-sm-6 mb-40">
          								<div class="single-property hover-effect-two">
          									<div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet" style="height:125px">
          										<div class="title-left pull_left">
          											<h4 class="text-white mb-12"><a href="{{url('/properties/'.$property->id.'/detail')}}">{{$property->project_name}}</a></h4>
          											<span>{{$property->location}}</span>
          										</div>
          									</div>
          									<div class="property-image">
          										<a href="{{url('/properties/'.$property->id.'/detail')}}" class="block dark-hover"><img src="{{asset('assets/images/properties/thumbnails/'.$property->thumbnail)}}" alt="">
          											<span class="img-button text-uppercase">More Details</span>
          											<span class="p-tag bg-lemon">FOR SALE</span>
          										</a>
          									</div>
          								</div>
          							</div>
                      @endforeach
                  		</div>
                  	</div>
                  </div>
                  <!--End of Featured Property Area-->



                <!--Start of Advertise Area-->
                <div class="advertise-area bg-1 bg-overlay-1 pt-76 pb-76">
                	<div class="container">
                		<div class="row">
                			<div class="col-md-12 text-center">
                				<h1 class="text-white mb-22">BOOK YOUR APPARTMENT OR HOUSE</h1>
                				<h2 class="text-white">CALL US ON : +8801730084407</h2>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Advertise Area-->
                <!--Start of Features Area-->
                <div class="features-area mt-100 banner-2 mb-92">
                	<div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase mb-24">AWESOME FEATURES</h2>
                                    <p class="pb-20">Every project of Oasis Holdings is filled with fantastic features that always fulfil client’s requirements and demands.<br/> Clients usually like the features that Oasis Holdings has in its every project.</p>
                                </div>
                            </div>
                        </div>
                		<div class="row">
                			<div class="col-md-9">
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/furnished.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Fully Furnished</a></h4>
                					</div>
                					<p>We can give fully furnished apartments if the client wants.</p>
                				</div>
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/paint.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Royal Touch Paint</a></h4>
                					</div>
                					<p>We offer paint with best finishing in the country.</p>
                				</div>
                				<div class="single-feature mb-35">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/interior.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Latest Interior Design</a></h4>
                					</div>
                					<p>Our Interior designers are trained from renowned institutions.</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/security.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Non Stop Security</a></h4>
                					</div>
                					<p>Our main concern is the security of our clients.</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/nature.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Living Inside a Nature</a></h4>
                					</div>
                					<p>Rooftop Garden with seating arrangement in every project of Oasis.</p>
                				</div>
                				<div class="single-feature">
                					<div class="single-feature-title">
                						<img src="{{asset('assets/images/icons/fittings.png')}}" alt="">
                						<h4 class="pl-40 mb-18"><a href="feature.html">Luxurious Fittings</a></h4>
                					</div>
                					<p>In case of fittings we offer luxurious fittings with best quality.</p>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <!--End of Features Area-->

                <!--Start of Fun Factor Area-->
                <div class="fun-factor-area bg-1 bg-overlay-1 ptb-90">
                	<div class="container">
                		<div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="{{asset('assets/images/icons/home.png')}}" alt="" class="mr-15">
                                    	<h2><span class="counter">100</span>+</h2>
                                	</div>
                                    <h4>Complete Project</h4>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="{{asset('assets/images/icons/key.png')}}" alt="" class="mr-15">
                                    	<h2><span class="counter">720</span>+</h2>
                                	</div>
                                    <h4>Property Sold</h4>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor">
                                	<div class="text-icon mb-8 block">
                                		<img src="{{asset('assets/images/icons/face.png')}}" alt="" class="mr-15">
                                    	<h2><span class="counter">650</span>+</h2>
                                	</div>
                                    <h4>Happy Clients</h4>
                                </div>
                            </div>
                		</div>
                	</div>
                </div>
                <!--End of Fun Factor Area-->
                <!--Start of Team Area-->
                {{-- <div class="team-area pt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-55 mt-31 text-center">
                                    <h2 class="uppercase mb-25">meet our AGENT</h2>
                                    <p class="pb-15">Oasis Holdings is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
							<div class="col-md-3 col-sm-4">
								<div class="single-team-member">
									<div class="member-image">
										<a href="agent-details.html" class="block">
											<img src="{{asset('assets/images/team/1.png')}}" alt="">
										</a>
										<div class="link-effect">
											<ul>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/phone.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/phone-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/facebook.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/facebook-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/twitter.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/twitter-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/g-plus.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/g-plus-hover.png')}}" alt=""></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="member-text text-center bg-violet pt-14 pb-18">
										<h3 class="mb-5"><a href="agent-details.html">Sir William Thomson</a></h3>
										<span>Real Estate Agent</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="single-team-member">
									<div class="member-image">
										<a href="agent-details.html" class="block">
											<img src="{{asset('assets/images/team/2.png')}}" alt="">
										</a>
										<div class="link-effect">
											<ul>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/phone.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/phone-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/facebook.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/facebook-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/twitter.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/twitter-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/g-plus.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/g-plus-hover.png')}}" alt=""></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="member-text text-center bg-violet pt-14 pb-18">
										<h3 class="mb-5"><a href="agent-details.html">Zacquline Farnandez</a></h3>
										<span>Real Estate Agent</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="single-team-member">
									<div class="member-image">
										<a href="agent-details.html" class="block">
											<img src="{{asset('assets/images/team/3.png')}}" alt="">
										</a>
										<div class="link-effect">
											<ul>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/phone.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/phone-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/facebook.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/facebook-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/twitter.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/twitter-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/g-plus.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/g-plus-hover.png')}}" alt=""></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="member-text text-center bg-violet pt-14 pb-18">
										<h3 class="mb-5"><a href="agent-details.html">Alfred Zackson</a></h3>
										<span>Real Estate Agent</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 hidden-sm">
								<div class="single-team-member">
									<div class="member-image">
										<a href="agent-details.html" class="block">
											<img src="{{asset('assets/images/team/4.png')}}" alt="">
										</a>
										<div class="link-effect">
											<ul>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/phone.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/phone-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/facebook.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/facebook-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/twitter.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/twitter-hover.png')}}" alt=""></a>
												</li>
												<li>
													<a href="#" class="block p-img"><img src="{{asset('assets/images/icons/g-plus.png')}}" alt=""></a>
													<a href="#" class="block s-img"><img src="{{asset('assets/images/icons/g-plus-hover.png')}}" alt=""></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="member-text text-center bg-violet pt-14 pb-18">
										<h3 class="mb-5"><a href="agent-details.html">Neha Jhograitta</a></h3>
										<span>Real Estate Agent</span>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div> --}}
                <!--End of Team Area-->
                <!--Testimonial Area Start-->
                <div class="testimonial-area text-center fix pt-100 pb-115">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container section-title mb-40 mt-31 text-center">
                                    <h2 class="uppercase mb-25">HAPPY CLIENTS</h2>
                                    <p class="pb-15">Some of the happy clients who took apartments from Oasis are satisfied by its service. Its a pleasure for whole Oasis team to give the service they wanted. Some of them had to say something about the company.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
								<div class="testimonial-image-slider text-center">
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="testimonial 1" />
										</div>
										<div class="sin-testiText">
											<p><span>Oasis</span> provided all the fittings and everything as it said. I am very satisfied with its service</p>
											<h4>Md. Saydul Hoque, <span>Expatriate Businessman in KSA</span></h4>
										</div>
									</div>
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/0.jpg')}}" alt="testimonial 2" />
										</div>
										<div class="sin-testiText">
											<p>It was difficult for me to check interior works of my flat from abroad. <span>Oasis</span> took care of that and handed over to me nicely</p>
											<h4>Engr. Mahbub Morshed, <span>Foreign service in UAE</span></h4>
										</div>
									</div>
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/0.jpg')}}" alt="testimonial 3" />
										</div>
										<div class="sin-testiText">
											<p><span>Oasis</span> kept its promise and did not compromise with quality of apartment and handed over on time</p>
											<h4>A.K.M Sazzadul Karim, <span>Director at Palmal Group</span></h4>
										</div>
									</div>
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/0.jpg')}}" alt="testimonial 1" />
										</div>
										<div class="sin-testiText">
											<p>I have got one of the best services from <span>Oasis</span> and I am looking forward to buy another apartment from <span>Oasis</span></p>
											<h4>Dr. Md.. Mizanur Rahman, <span>Service at Un-mission</span></h4>
										</div>
									</div>
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/0.jpg')}}" alt="testimonial 2" />
										</div>
										<div class="sin-testiText">
											<p>Whenever anybody wants my suggestion to buy apartment, I suggest <span>Oasis</span> as it delivered what it said to me</p>
											<h4>Mr. Bashit Ahmed, <span>Retd. Govt. Officer</span></h4>
										</div>
									</div>
									<div class="sin-div">
										<div class="sin-testiImage">
											<img src="{{asset('assets/images/testimonial/0.jpg')}}" alt="testimonial 3" />
										</div>
										<div class="sin-testiText">
											<p>Office staffs, engineers and management people of <span>Oasis</span> are very friendly and they show their professionalism in their work too</p>
											<h4>Dr. Golam Mohiuddin Khan, <span>Doctor at UNICEF</span></h4>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Testimonial Area-->

				<!--Start of Client area-->
				<div class="client-area ptb-115">
					<div class="container">
						<div class="row">
							<div class="client-carousel carousel-none">
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="{{asset('assets/images/client/rehab.jpg')}}" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="{{asset('assets/images/client/blda.jpg')}}" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="{{asset('assets/images/client/baci.jpg')}}" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="{{asset('assets/images/client/rajuk.jpg')}}" alt=""></span>
										</a>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="single-client block pt-7 pb-7">
										<a href="#" class="block">
											<span><img src="{{asset('assets/images/client/fbcci.png')}}" alt=""></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End of Client area-->


@endsection


@push('bottom-scripts')

		<!-- nivo slider js
		========================================================= -->
		<script src="{{asset('assets/lib/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
		<script src="{{asset('assets/lib/nivo-slider/home.js')}}"></script>

        <!-- Waypoint Js
		========================================================= -->
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>

		<!-- Slick Carousel JS
		========================================================= -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>


        <!-- Plugin Js
		========================================================= -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>

        <!-- Particles ACtivation JS
		========================================================= -->
        <script src="{{asset('assets/js/app.js')}}"></script>

@endpush
