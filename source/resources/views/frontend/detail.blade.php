@extends('frontend.layout')

@section('title', 'About')


@section('content')


                <!--Start of Banner Area-->
                <div class="banner-area bg-2 bg-overlay-2 ptb-165">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title text-center">
                                    <h1 class="text-uppercase text-white">{{$property->project_name}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of Featured Property Area-->
                <div class="property-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                  <div class="property-image mb-57">
                                          <div id="designCarousel" class="carousel slide" data-ride="carousel">
                                              @if(count($property->images)>1)
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                  @for($i=0; $i<count($property->images); $i++)
                                                    <li data-target="#designCarousel" data-slide-to="{{$i}}" @if($i==0)class="active"@endif></li>
                                                  @endfor
                                                </ol>
                                            @endif

                                              <!-- Wrapper for slides -->
                                              <div class="carousel-inner">
                                                  @foreach($property->images as $key=>$image)
                                                  <div class="item @if($key==0){{'active'}}@endif">
                                                      <img src="{{asset('assets/images/properties/designs/'.$image->img_name)}}" style="width:100%;">
                                                  </div>
                                                  @endforeach
                                              </div>

                                              @if(count($property->images)>1)
                                              <!-- Left and right controls -->
                                              <a class="left carousel-control" href="#designCarousel" data-slide="prev">
                                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                                  <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="right carousel-control" href="#designCarousel" data-slide="next">
                                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                                  <span class="sr-only">Next</span>
                                              </a>
                                            @endif
                                          </div>
                                  </div>
                                @if(!empty($property->description))
                                <div class="property-desc mb-56">
                                    <h4 class="details-title mb-22">Description</h4>
                                    <p class="mb-24">{{$property->description}}</p>
                                </div>
                                @endif
                                <div class="property-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="details-title mb-38">Summary</h4>
                                            <div class="bg-gray fix pl-35 pt-42 pr-35 pb-39 left-column mb-56">
                                                <div class="desc-info mb-20">
                                                    Location : {{$property->location}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Land Area : {{$property->land_area}}
                                                </div>

                                                <div class="desc-info mb-37">
                                                    Architect : {{$property->architect}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Rajuk Approval Number and Date  : {{$property->rajuk_approval}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Orientation of the Land : {{$property->land_orientation}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Front Road : {{$property->front_road}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Number of Apartment : {{$property->no_of_apartments}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Size of Units : {{$property->size_of_units}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Total Build Area  : {{$property->total_build_area}}
                                                </div>

                                                <div class="desc-info mb-20">
                                                    Number of Car Parking  : {{$property->no_of_carparking}}
                                                </div>

                                            </div>
                                        </div>
                                        @if(!empty($property->amenities))
                                        <div class="col-md-12">
                                            <h4 class="details-title mb-38">Amenities</h4>
                                            <div class="bg-gray fix pl-50 pr-50 pt-44 pb-38 right-column mb-56">

                                                @php

                                                $amenities = explode(',', $property->amenities);

                                                @endphp

                                                @foreach($amenities as $amenity)

                                                <div class="desc-info mb-26">
                                                    <i class="fa fa-check-square-o mr-9"></i>
                                                    <span>{{$amenity}}</span>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Featured Property Area-->

@endsection
