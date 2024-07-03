@extends('layouts.front')
@section('title', 'hhhh')
@section('content')

    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold">Single Ads</h2>
                            <span><a href="#" class="text-black">Home </a> / <a href="#" class="text-black">Ads
                                </a> / Single Ads</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumd section end -->
        <!-- member list section start -->
        <section id="member_list_section" class="member_list_section single_ads">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="common_single_bg bg-white py-5 px-5 rounded">
                            
                            @php
                                  $classifiedsingle->multipleimage = json_decode($classifiedsingle->multipleimage);
                            @endphp
                      
                            <img src="{{ $classifiedsingle->multipleimage[0] }}" id="mainCarosel">

                   
                                <div id="thumbnailscarosel">
                                    <img src=" {{ $classifiedsingle->multipleimage[0] }}">
                                    <img src=" {{ $classifiedsingle->multipleimage[1] }}">
                                    <img src=" {{ $classifiedsingle->multipleimage[2] }}">
                                    <img src=" {{ $classifiedsingle->multipleimage[3] }}">
                                    <img src=" {{ $classifiedsingle->multipleimage[4] }}">
                                </div>
                  


                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading">
                                <h3 class="fw-bold mb-2">{{ $classifiedsingle->title }}</h3>
                                <p class="mb-2">{{ $classifiedsingle->dateposted }}</p>
                                <h5 class="mb-3">{{ $classifiedsingle->price }}</h5>
                            </div>
                            <div class="single_add_box mt-5">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Category: <span class="ms-3">Electronics Accessories</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Subcategory: <span class="ms-3">Mobile</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Location: <span class="ms-3">{{ $classifiedsingle->location }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>District: <span class="ms-3">Lahore</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Tehsil: <span class="ms-3"> Lahore</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Post Time: <span class="ms-3">Lahore</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_add_heading border-0 mt-4">
                                <h3 class="fw-bold mb-2">Description:</h3>
                                <p class="mb-2">{{ $classifiedsingle->description }}</p><br>

                            </div>
                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading">
                                <h3 class="fw-bold mb-2">{{ $classifiedsingle->title }}</h3>
                            </div>
                            <div class="single_add_box mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Price: <span
                                                    class="ms-3">${{ $classifiedsingle->price }} Negotiable</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Phone: <span class="ms-3">+9234567899</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Email: <span class="ms-3"> {{ $classifiedsingle->email }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_add_box1 py-4 px-3 border rounded mb-3">
                                            <h6>Address: <span class="ms-3">Birmingham, Washington state, USA</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading border-0">
                                <h3 class="fw-bold mb-2">Videos</h3>
                            </div>
                            <div class="single_add_box mt-3">
                                <iframe width="100%" height="315" src="{{ $classifiedsingle->video }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-3">
                        <div class="common_join_heading py-3 ps-3 mb-4">
                            <h5 class="fw-bold">Related Categories</h5>
                        </div>
                        <div class="common_filter_tehsil bg-white">

                            <div class="relative_categoris">
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Private Car</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Bike</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            By Cycle</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Television</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Camera</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Laptop</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Computer</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                            </div>
                        </div>
                        <div class="common_join_heading py-3 ps-3 mb-4 mt-4">
                            <h5 class="fw-bold">Related Ads</h5>
                        </div>
                        <div class="card position-relative border-0 mb-3">
                            <h6 class="classified_position_heading  classified_position_heading_color position-absolute">
                                Featured</h6>
                            <div class="hart_postion position-absolute">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <img src="./img/classified_page/image2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-4 mobile_bg"><i
                                            class="fa-solid fa-laptop me-2 text-white"></i>Laptop</div>
                                    <div class="card_date_common mb-4"><i class="fa fa-star rating-color me-2"></i>4.5
                                    </div>
                                </div>
                                <h5 class="card-title mt-4">Macbook M2 Pro</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> 25/A Road New York, USA</p>
                                <p class="card-text mt-2"><i class="fa-regular fa-clock"></i> 10 Days Ago</p>

                                <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold">$320</h6>
                                    <a href="#" class="py-3">Read More<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card position-relative border-0 mb-3">
                            <h6 class="classified_position_heading position-absolute">New</h6>
                            <div class="hart_postion position-absolute">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <img src="./img/classified_page/image3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-4 mobile_bg"><i
                                            class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles</div>
                                    <div class="card_date_common mb-4"><i class="fa fa-star rating-color me-2"></i>4.5
                                    </div>
                                </div>
                                <h5 class="card-title mt-4">iPhone 12 Pro</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> 25/A Road New York, USA</p>
                                <p class="card-text mt-2"><i class="fa-regular fa-clock"></i> 10 Days Ago</p>

                                <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold">$320</h6>
                                    <a href="#" class="py-3">Read More<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- member list section end -->
    </main>


@endsection
