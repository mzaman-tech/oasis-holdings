@extends('frontend.layout')

@section('title', 'About')

@push('top-scripts')

        <!-- Style Customizer CSS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/style-customizer.css')}}">
        <link href="#" data-style="styles" rel="stylesheet">  
        
        <!-- Modernizr JS -->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>    

@endpush



@section('content')
    

                <!--Start of Banner Area-->
                <div class="banner-area bg-1 bg-overlay-2 ptb-165">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title text-center">
                                    <h1 class="text-uppercase text-white">ABOUT COMPANY</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of About Area-->
                <div class="about-area mt-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"><img src="{{asset('assets/images/banner/3.png')}}" alt=""></div>
                            <div class="col-md-6">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">KNOW ABOUT <span class="text-color">Oasis Holdings</span></h2>
                                </div>
                                <p class="23"><span class="text-dark text-uppercase">Oasis Holdings</span> started its journey in 2006 in the real estate sector with its specialization in developing luxury residential complexes and manufacturing quality building products, eventually has been enjoying a distinguished stature as a reputed brand in the real estate sector for nearly over a decade. First project of Oasis was Blossoms in Mohammadpur. The construction of the building was started in 2007. It was Successfully handed over with 24 apartments in 2010. Second project of oasis was Serissa in Uttara . The construction of the project was started in the same year as Blossoms. It was also handed over with 10 apartment units in 2010.</p>
                                <p class="34">In 2007 Third project of Oasis is Oleander in Shamoly which was handed over in 2014 and fourth project was Sara Amaraborti in Uttara which was handed over in the same year as Oleander.</p>
								
								<p class="34">In 2013 Oasis expanded its real estate business in Khulna. It started with only one project in Khulna, LATIF GARDEN which is located in Haji Mohammad Road. Currently it is operating with 3 projects in Khulna and few more projects to come.</p>
								
								<p class="34">Oasis started with only one project but now it is involved with 20 projects in Bangladesh.</p>
								
								<p class="34">Oasis Successfully handed over 80 apartments of its 6 completed projects. Currently work of its 8 ongoing projects are going swiftly. Beside its ongoing projects Oasis has recently signed few upcoming projects, work of those projects will start shortly.</p>
								
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of About Area -->
                <!--Start of About Property Area-->
                <div class="about-property-area pt-62">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cloumn-left hover-effect-one">
                                    <div class="white-hover">
                                        <img src="{{asset('assets/images/banner/5.jpg')}}" alt="">
                                        <span class="bg-violet">Before</span>
                                    </div>
                                </div>
                                <div class="cloumn-right hover-effect-one">
                                    <div class="white-hover">
                                        <img src="{{asset('assets/images/banner/6.jpg')}}" alt="">
                                        <span class="bg-lemon">After</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-60">
                            <div class="col-md-5">
                                <div class="about-text pt-60">
                                    <h4 class="uppercase mb-18">WE ARE EXPERT</h4>
                                    <p class="pr-48">We provide accurate and up-to-date information, skilled analysis and sound real estate advice and, we also continually explore new ideas and technology, to make the selling and buying of real estate faster, less costly and easier.</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6 pl-0">
                                        <div class="about-text pt-60">
                                            <h4 class="uppercase mb-18">OUR MISSION</h4>
                                            <p>To make the buying and selling of real estate as cost effective as possible while maintaining the highest level of service and to enhance our quality of life through active community involvement.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-text pt-60">
                                            <h4 class="uppercase mb-18">OUR VISSION</h4>
                                            <p>We will change the way you think about quality. Highly comfortable service, friendly staff and best prices provide you an experience that will be memorable for whole life. </p>
                                        </div>
                                    </div>
                                </div>  
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End of About Property Area-->
                <!--Start of Fun Factor Area-->
                <div class="fun-factor-area pb-100 pt-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor text-dark">
                                    <div class="text-icon mb-8 block">
                                        <img src="{{asset('assets/images/icons/home.png')}}" alt="" class="mr-15">
                                        <h2><span class="counter">100</span>+</h2>
                                    </div>
                                    <h4>Complete Project</h4>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor text-dark">
                                    <div class="text-icon mb-8 block">
                                        <img src="{{asset('assets/images/icons/key.png')}}" alt="" class="mr-15">
                                        <h2><span class="counter">720</span>+</h2>
                                    </div>
                                    <h4>Property Sold</h4>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="single-fun-factor text-dark">
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
                <!--Start of Service Area-->
                <div class="service-area pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-61 text-center">
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
                <!--Start of Features Area-->
                <div class="features-area mt-50 banner-2 mb-110">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase mb-24">AWESOME FEATURES</h2>
                                    <p class="pb-20">Every project of Oasis Holdings is filled with fantastic features that always fulfil client’s requirements and demands. <br/>Clients usually like the features that Oasis Holdings has in its every project.</p>
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
                <!--Start of Team Area-->
                {{-- <div class="team-area pt-100 bg-light pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-55 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">AWESOME AGENTS</span>
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
                                            <img src="{{asset('assets/images/team/5.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/images/team/6.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/images/team/7.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/images/team/8.jpg')}}" alt="">
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
                {{-- <div class="testimonial-area text-center fix pt-100 pb-115">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title mb-40 mt-31 text-center">
                                    <span class="opacity-text text-uppercase center">CLIENTS COMENTS</span>
                                    <h2 class="uppercase mb-25">HAPPY CLIENTS</h2>
                                    <p class="pb-15">Oasis Holdings is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed<br> do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="testimonial-image-slider text-center">
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="testimonial 1" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>Alex, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="testimonial 2" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>James Bond, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="testimonial 3" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>Jenefer, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="testimonial 1" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>Alex, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="testimonial 2" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>James Bond, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                    <div class="sin-div">
                                        <div class="sin-testiImage">
                                            <img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="testimonial 3" />
                                        </div>
                                        <div class="sin-testiText">
                                            <p><span>Oasis Holdings</span> is the best theme for  elit, sed do od tempor dolor sit amet, conse tetur adipiscingit, ed do eiusm label</p>
                                            <h4>Jenefer, <span>CEO</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--End of Testimonial Area-->
                <!--Start of Client area-->
                <div class="client-area pb-115">
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


@endpush
