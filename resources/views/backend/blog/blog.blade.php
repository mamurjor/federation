@extends('layouts.app')
@section('title', 'Blog')
@section('content')


    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold">Blog</h2>
                            <span><a href="#" class="text-black">Home</a> / Blog</span>
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
                        <div class="common_filter_tehsil">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY TEHSIL</h4>
                            <input class="form-control py-3 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Islamabad</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Rawalpindi</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(34)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Faisalabad</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(85)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Lahore</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(63)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Dera Ghazi Khan</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(25)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Larkana</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(66)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Kandhkot</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(05)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                            <input class="form-control py-3 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Doctor</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Teacher</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(34)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Banker</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(85)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Politician </span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(63)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Advocate</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(25)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Businessmen</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(66)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Mechanic</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(05)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                        <div class="common_join_heading common_filter_tehsil py-3 ps-3 mb-4 mt-4">
                            <h5 class="fw-bold">Join Us</h5>
                        </div>

                        <div class="common_join_box join_us_bg text-center">
                            <h3>Join us today!</h3>
                            <p>The Jutt Federation Pakistan & International KSA envisions a world where Jutt individuals and
                                organizations unite on a common platform, transcending geographical boundaries to foster
                                unity, prosperity</p>
                            <div class="common_button mt-5">
                                <a href="#"> Sign Up Now <i class="fa-solid fa-circle-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row common_filter_top rounded py-3 px-3 align-items-center">
                            <div class="col-xl-5 col-lg-12 col-sm-12 col-md-12">
                                <div class="input-group  bg-white pe-3 mb-2 mt-2">
                                    <input type="search" placeholder="Write email....." aria-describedby="button-addon1"
                                        class="form-control border-0 placeholder_search py-3 px-4">
                                    <div class="input-group-append align-self-center">
                                        <button id="button-plane" type="submit"
                                            class="btn btn-link text-white bg-danger"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6 d-flex align-items-center">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                    <label for="number" class="number_filter_label">SHOW :<input type="number"
                                            name="number" value="120" class="py-2 ms-3">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                    <label for="number" class="number_filter_label">SHORT BY : <select name="text"
                                            id="short_bye" class="py-2 px-5 bg-white border-1">
                                            <option value="">Defualt</option>
                                            <option value="">Defualt</option>
                                            <option value="">Defualt</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            @foreach ($blogpost as $single)
                                <div class="col-md-6 col-lg-4 col-sm-6">
                                    <div class="card border-0 mb-3">
                                        <img src="{{ $single->image }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-2"><i
                                                        class="fa-regular fa-circle-user me-2"></i>
                                                    @if ($user->role_id == 1)
                                                      Admin
                                                    @elseif ($user->role_id == 2)
                                                      Client
                                                    @else
                                                      User
                                                    @endif

                                                </div>
                                                <div class="card_date_common mb-2"><i
                                                        class="fa-solid fa-calendar-days me-2"></i>{{ $single->created_at }}
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">{{ $single->title }}</h5>
                                            <p class="card-text">{{ $single->description }}
                                            </p>
                                            <div class="common_button mt-5 mb-3 blog_post_btn">
                                                <a href="{{ route('blog.single', $single->id) }}" class="py-3">Read
                                                    More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link arrow_btn_bg text-white" href="#"
                                            aria-label="Previous">
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
