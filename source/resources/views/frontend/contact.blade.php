@extends('frontend.layout')

@section('title', 'Contact')

@section('content')
    

                <!--Start of Banner Area-->
                <div class="banner-area bg-2 bg-overlay-2 ptb-165">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title text-center">
                                    <h1 class="text-uppercase text-white">Contact</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of Google Map-->
                <div class="google-map-area pt-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!--Start of Map Section-->
                                <div id="contacts" class="map-area">
                                    <div id="googleMap" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);"></div>
                                <!--End of Map Section-->
                                </div>
                                <div class="contact-information">
                                    <div class="single-contact-info"> 
                                        <div class="pull_left contents ml-8"> 
                                            <img src="{{asset('assets/images/icons/c-map.png')}}" alt="">
                                            <div class="info-text pl-40">
                                                <span class="block mb-7">32/3 Sher Shah Suri Road</span>
                                                <span class="block mb-7"> Mohammadpur, Dhaka</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-contact-info"> 
                                        <div class="contents"> 
                                            <img src="{{asset('assets/images/icons/c-phone.png')}}" alt="">
                                            <div class="info-text pl-40">
                                                <span class="block mb-7">Telephone : +8801730084407</span>
                                                <span class="block mb-7">Telephone : +8801711362209</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-contact-info"> 
                                        <div class="pull_right contents mr-8"> 
                                            <img src="{{asset('assets/images/icons/c-globe.png')}}" alt="">
                                            <div class="info-text pl-40">
                                                <span class="block mb-7">Email : info@oasisholdingsltd.com</span>
                                                <span class="block mb-7">Web : www.oasisholdingsltd.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Google Map-->
                <!--Start Contact Form Area-->
                <div class="contact-form-area fix ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h4 class="details-title text-center mb-43">Leave a Message</h4>
                                <form id="contact-form" action="mail.php" method="post">
                                    <input type="text" name="name" class="mb-22" placeholder="Your name">
                                    <input type="text" name="email" class="mb-22" placeholder="Email here">
                                    <textarea name="message" cols="30" rows="10" placeholder="Write here"></textarea>
                                    <div class="col-10 fix text-center">
                                        <button type="submit" class="button submit-btn lemon mt-35">SUBMIT</button>
                                    </div>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Contact Form Area-->

@endsection


@push('bottom-scripts')
    
        <!-- Google Map js
        ============================================ -->        
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.7661792,90.3657891)
              };

              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);


              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: '{{asset('assets/images/map-marker.png')}}',
                map: map
              });
                
            }
                
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

@endpush
