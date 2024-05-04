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
                        <h2 class="fw-bold">Classified Ads</h2>
                        <span><a href="#" class="text-black">Home</a> / Classified Ads</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumd section end -->
    <!-- member list section start -->
    <section id="member_list_section" class="member_list_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="common_filter_tehsil mb-4">
                        <h4 class="fw-bold common_filter_heading mb-4">FILTER BY PRICE</h4>
                        <div class="price-input">
                            <div class="field">
                              <label class="form-label">Min</label>
                              <input type="number" class="input-min form-control" value="0">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" class="input-max" value="7500">
                            </div>
                          </div>
                          <div class="slider">
                            <div class="progress"></div>
                          </div>
                          <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                          </div>
                        
                    </div>
                    <div class="common_filter_tehsil">
                        <h4 class="fw-bold common_filter_heading mb-4">FILTER BY TEHSIL</h4>
                        <input class="form-control py-3 search_input mb-4" type="search" name="search" placeholder="search">
                        <div class="common_filter_check">
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Islamabad</span>
                                    </label>
                                </div>
                                <span class="filter_size">(45)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Rawalpindi</span>
                                    </label>
                                </div>
                                <span class="filter_size">(34)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Faisalabad</span>
                                    </label>
                                </div>
                                <span class="filter_size">(85)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Lahore</span>
                                    </label>
                                </div>
                                <span class="filter_size">(63)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Dera Ghazi Khan</span>
                                    </label>
                                </div>
                                <span class="filter_size">(25)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Larkana</span>
                                    </label>
                                </div>
                                <span class="filter_size">(66)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Kandhkot</span>
                                    </label>
                                </div>
                                <span class="filter_size">(05)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Quetta</span>
                                    </label>
                                </div>
                                <span class="filter_size">(50)</span>
                            </div>
                        </div>
                        <div class="common_button mt-5 text-center">
                            <a href="#" class="bg-white text-black">CLEAR FILTER</a>
                        </div>
                    </div>
                    <div class="common_filter_tehsil mt-4">
                        <h4 class="fw-bold common_filter_heading mb-4">FILTER BY PROFESSION</h4>
                        <input class="form-control py-3 search_input mb-4" type="search" name="search" placeholder="search">
                        <div class="common_filter_check">
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Doctor</span>
                                    </label>
                                </div>
                                <span class="filter_size">(45)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Teacher</span>
                                    </label>
                                </div>
                                <span class="filter_size">(34)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Banker</span>
                                    </label>
                                </div>
                                <span class="filter_size">(85)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Politician </span>
                                    </label>
                                </div>
                                <span class="filter_size">(63)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Advocate</span>
                                    </label>
                                </div>
                                <span class="filter_size">(25)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Businessmen</span>
                                    </label>
                                </div>
                                <span class="filter_size">(66)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Mechanic</span>
                                    </label>
                                </div>
                                <span class="filter_size">(05)</span>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        Engineer</span>
                                    </label>
                                </div>
                                <span class="filter_size">(50)</span>
                            </div>
                        </div>
                        <div class="common_button mt-5 text-center">
                            <a href="#" class="bg-white text-black">CLEAR FILTER</a>
                        </div>
                    </div>
                    <div class="common_filter_tehsil mt-4">
                        <h4 class="fw-bold common_filter_heading mb-4">RATINGS</h4>
                        <div>
                            
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ratings">
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            
                                        </div></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ratings">
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            
                                        </div></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ratings">
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            
                                        </div></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                <div>
                                    <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ratings">
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star rating-color"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            
                                        </div></span>
                                    </label>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row common_filter_top rounded py-3 px-3 align-items-center">
                        <div class="col-xl-5 col-lg-12 col-sm-12 col-md-12">
                            <div class="input-group  bg-white pe-3 mb-2 mt-2">
                                <input type="search" placeholder="Write email....." aria-describedby="button-addon1" class="form-control border-0 placeholder_search py-3 px-4">
                                <div class="input-group-append align-self-center">
                                  <button id="button-plane" type="submit" class="btn btn-link text-white bg-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6 d-flex align-items-center">
                            <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                <label for="number" class="number_filter_label">SHOW :<input type="number" name="number" value="120" class="py-2 ms-3">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                            <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                <label for="number" class="number_filter_label">SHORT BY : <select name="text" id="short_bye" class="py-2 px-5 bg-white border-1">
                                    <option value="">Defualt</option>
                                    <option value="">Defualt</option>
                                    <option value="">Defualt</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">

                        @foreach ($classified as $data)
                            
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                            <div class="card position-relative border-0 mb-3">
                                <h6 class="classified_position_heading position-absolute">New</h6>
                                <div class="hart_postion position-absolute">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <img src="{{ $data->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card_date d-flex justify-content-between">
                                        <div class="card_date_common mb-4 mobile_bg"><i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles</div>
                                        <div class="card_date_common mb-4"><i class="fa fa-star rating-color me-2"></i>4.5</div>
                                    </div>
                                  <h5 class="card-title mt-4">{{ $data->title }}</h5>
                                  <p class="card-text"><i class="fa-solid fa-location-dot"></i>{{ $data->location }}</p>
                                  <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>  10 Days Ago</p>
                                  
                                <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                    <h6 class="fw-bold">${{ $data->price }}</h6>
                                    <a href="{{ route('classified.single',$data->id) }}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                      
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link arrow_btn_bg text-white" href="#" aria-label="Previous">
                                  <span aria-hidden="true"><i class="fa-solid fa-arrow-left"></i></span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link arrow_btn_bg text-white" href="#" aria-label="Next">
                                  <span aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member list section end -->
   </main>

@endsection
