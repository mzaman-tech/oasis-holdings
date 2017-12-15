@extends('frontend.layout')

@section('title', 'About')


@section('content')


                <!--Start of Banner Area-->
                <div class="banner-area bg-2 bg-overlay-2 ptb-165">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title text-center">
                                    <h1 class="text-uppercase text-white">@if(!empty($status)){{$status}} @endif Properties </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of Featured Property Area-->
                <div class="property-area ptb-120 sidebar list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                @foreach($properties as $property)
                                    <div class="col-md-12 mb-40">
                                        <div class="single-property hover-effect-two fix bg-light">
                                            <div class="property-container mr-40">
                                                <div class="property-image">
                                                    <a href="{{url('/properties/'.$property->id.'/detail')}}" class="block dark-hover"><img src="{{asset('assets/images/properties/thumbnails/'.$property->thumbnail)}}" alt="">
                                                        <span class="img-button text-uppercase">More Details</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="property-content fix pr-25">
                                                <div class="property-title fix mt-33 mb-15">
                                                    <h3>{{$property->project_name}}</h3>
                                                </div>

                                                <span>
                                                    <span class="mr-10"><img src="{{asset('assets/images/icons/map.png')}}" alt=""></span>
                                                    {{$property->location}}
                                                </span>

                                            </div>

                                            <a href="{{url('/properties/'.$property->id.'/detail')}}" class="button search_price lemon mt-36"><span><span>View Detail</span></span></a>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Featured Property Area-->

@endsection
