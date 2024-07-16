@extends('layouts.front')
@section('title', 'Members')
@section('content')

    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold fs-2">Member list</h2>
                            <span><a href="#" class="text-black fs-6">Home</a> / Member list</span>
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
                        <div class="common_filter_tehsil filter_size">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY TEHSIL</h4>
                            <input class="form-control py-2 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Islamabad</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Rawalpindi</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(34)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input  p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Faisalabad</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(85)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Lahore</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(63)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Dera Ghazi Khan</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(25)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Larkana</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(66)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Kandhkot</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(05)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Quetta</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(50)</span>
                                </div>
                            </div>
                            <div class="common_button mt-5 text-center">
                                <a href="#" class="bg-white filter_btn">CLEAR FILTER</a>
                            </div>
                        </div>
                        <div class="common_filter_tehsil filter_size mt-4">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY PROFESSION</h4>
                            <input class="form-control py-2 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Doctor</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(45)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Teacher</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(34)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Banker</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(85)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Politician </span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(63)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Advocate</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(25)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Businessmen</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(66)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Mechanic</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(05)</span>
                                </div>
                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-2 check_style" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                            Engineer</span>
                                        </label>
                                    </div>
                                    <span class="filter_size">(50)</span>
                                </div>
                            </div>
                            <div class="common_button mt-4 text-center">
                                <a href="#" class="bg-white filter_btn">CLEAR FILTER</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row common_filter_top rounded py-3 px-3 align-items-center">
                            <div class="col-xl-5 col-lg-12 col-sm-12 col-md-12">
                                <div class="input-group  bg-white pe-3 mb-2 mt-2">
                                    <input type="search" placeholder="Write email....." aria-describedby="button-addon1"
                                        class="form-control border-0 placeholder_search py-2 px-4">
                                    <div class="input-group-append align-self-center">
                                        <button id="button-plane" type="submit"
                                            class="btn btn-link text-white bg-danger"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-md-6 align-items-center">
                                <div class="input-group bg-white py-2 px-3 justify-content-center rounded mb-2 mt-2">
                                    <div class="row g-1">
                                        <label for="number"
                                            class="number_filter_label col-sm-4 filter_title  col-form-label">SHOW
                                            :</label>

                                        <div class="col-sm-6">
                                            <input type="number" name="number" value="120"
                                                class="form-control filter_form">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                <div class="input-group bg-white py-2 px-3 justify-content-center rounded mb-2 mt-2">
                                    <div class="row g-1">
                                        <label for="number" class="number_filter_label col-sm-4 filter_title_2">SHORT BY : </label>
                                        <div class="col-sm-6">
                                            <select class="form-select filter_form_2" name="text"  id="short_bye" aria-label="Default select example">
                                                <option selected>Default</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            @foreach ($users as $user)
                                <div class="col-md-4 col-sm-6 col-lg-4 col-xl-3 mb-4">
                                    <div class="latest_member_box text-center">
                                        <img class="mb-3" src="{{ $user->userimage }}" alt="">
                                        <h6 class="mem_name">{{ $user->fname }} {{ $user->mname }}</h6>
                                        <p>Member</p>
                                    </div>
                                </div>
                            @endforeach

                            <div class="d-flex justify-content-center">
                                {{ $users->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- member list section end -->
    </main>
@endsection
