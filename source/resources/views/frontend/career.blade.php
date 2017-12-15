@extends('frontend.layout')

@section('title', 'Career')

@section('content')
    

                <!--Start of Banner Area-->
                <div class="banner-area bg-3 bg-overlay-1 ptb-165">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-title text-center">
                                    <h1 class="text-uppercase text-white">Career</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Banner Area-->
                <!--Start of Single Post Area-->
                <div class="single-post-area pt-115 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="#" method="post">
                                    <div class="col-10">
                                        <h4 class="sub-title mb-40">Step # 1</h4>
                                        <h4 class="details-title mb-34">Basic Information</h4>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="details-title text-small mb-18">Full Name *</h4>
                                        <input type="text" name="title" placeholder="Enter your name here" class="mb-28">
                                    </div>
                                    <div class="col-5">
                                        <h4 class="details-title text-small mb-18">Email *</h4>
                                        <input type="text" name="title" placeholder="Enter your email here" class="mb-28">
                                    </div>

                                    <div class="col-5 pl-25">
                                        <h4 class="details-title text-small mb-18">Phone *</h4>
                                        <input type="text" name="price" placeholder="Enter your phone here" class="mb-32">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="details-title text-small mb-18">Message</h4>
                                        <textarea name="post-comment" cols="30" rows="10" placeholder="Enter your message here" class="mb-95 bg-light"></textarea>
                                    </div>
                                  
                                    <div class="col-10">
                                        <h4 class="sub-title mb-40">Step # 2</h4>
                                    </div>
                                    <div class="col-10">
                                        <h4 class="details-title mb-34">Upload CV</h4>
                                        <div class="upload text-center">
                                            <input type="file" name="fileupload">
                                            <span class="action text-white"><i class="fa fa-folder-open mr-10"></i>Browse File</span>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <button class="button text-white text-uppercase lemon pull_right mt-65">Submit</button>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End of Single Post Area-->


@endsection
