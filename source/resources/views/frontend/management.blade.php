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
                                    <h1 class="text-uppercase text-white">ABOUT MANAGEMENT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of Team Area-->
                <div class="about-area mt-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/1.png')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Md. Tahamul Hossain</h2>
                                    <p class="mt-10"><i>Chairman</i></p>
                                </div>
                                <p class="23">After completing his MBA he served as executive in a reputed financial organization for few years. From the beginning he wanted to be an entrepreneur so he decided to something after gathering some experience of working in different sectors. Md. Tahamul Hossain is the founder-chairman of the company. He along with Md. Mostafizur Rahman took the first initiative to set up a business in the real estate sector. Along with Oasis he is also the chairman and founder of SICS Ltd which was formed in 2004, which is also a financial organization.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/2.jpg')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Md. Mostafizur Rahman</h2>
                                    <p class="mt-10"><i>Managing Director</i></p>
                                </div>
                                <p class="23">He completed his Masters in accounting and worked in various sectors. Md. Mostafizur Rahman  is the managing director &amp; co-founder of Oasis Holdings. He has the experience in real estate sector for nearly 2 decades now. He gathered experience in the real estate sector then he came up with the idea along with Md. Tahamul Hossain to start real estate business. Then Oasis was formed in 2006.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/3.png')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Abdus Sukur Khan</h2>
                                    <p class="mt-10"><i>Director</i></p>
                                </div>
                                <p class="23">He is one of the board of directors and working partners of the company. Mr, Abdus Sukur Khan is vastly experienced in real estate sector. He has been involved in construction business for over 40 years. He has the experience of working under great engineers &amp; contractors. He is one of the main pillars of Oasis. He had the privilege to work under Jahurul Islam, the founder-chairman of Islam group.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/4.png')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Abdul Mannan Talukder</h2>
                                    <p class="mt-10"><i>Director</i></p>
                                </div>
                                <p class="23">He is a retired government officer. He retired from government job in the late 1990s. He is the director of the company since the very beginning.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/5.png')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Mrs. Salma Begum</h2>
                                    <p class="mt-10"><i>Director</i></p>
                                </div>
                                <p class="23">She is a house wife. At the time when Oasis was forming she has invested in the business and became one of the directors of the company.</p>
                            </div>
                        </div>
                        <div class="row mb-120">
                            <div class="col-md-4 mt-30 text-center"><img src="{{asset('assets/images/team/6.png')}}" alt=""></div>
                            <div class="col-md-8">
                                <div class="section-title mb-38 mt-31">
                                    <h2 class="uppercase">Md. Rakibul Islam (Jewel)</h2>
                                    <p class="mt-10"><i>Director</i></p>
                                </div>
                                <p class="23">He completed his Masters from Khulna Commerce College. Then he went to USA served as a executive in a private company. Then he went to London, UK and started a business. In the late 2000s he returned to Bangladesh intend to become one of the partners of Oasis. The projects of the company which are located in Khulna are under his guidance. He is managing our Khulna office.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Team Area -->
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
