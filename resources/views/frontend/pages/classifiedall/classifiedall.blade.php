@extends('layouts.front')
@section('title', 'Classified')
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
                                    <label class="form-label">Max</label>
                                    <input type="number" class="input-max form-control" value="7500">
                                </div>
                            </div>

                            {{-- slider  --}}

                            <div class="price-range-slider">
                                <p class="range-value">
                                    <input type="text" id="amount" readonly>
                                </p>
                                <div id="slider-range" class="range-bar"></div>
                            </div>

                        </div>


                        <div class="common_filter_tehsil">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY TEHSIL</h4>
                            <input class="form-control py-3 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                @foreach ($getalltehsil as $single)
                                    <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                        <div>
                                            <input class="form-check-input p-3 filtertehsil" type="checkbox"
                                                value="{{ $single->name }}" id="flexCheckChecked">
                                            <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                                {{ $single->name }}</span>
                                            </label>
                                        </div>
                                        <span id="totaldata" class="filter_size"></span>
                                    </div>
                                @endforeach


                            </div>
                            <div class="common_button mt-5 text-center">
                                <button type="submit" id="clearFilterBtn"
                                    class="btn btn-danger waves-effect waves-light">CLEAR FILTER</button>
                            </div>
                        </div>
                        {{-- <div class="common_filter_tehsil mt-4">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY PROFESSION</h4>
                            <input class="form-control py-3 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                @foreach ($allprofession as $single)
                                    <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                        <div>
                                            <input class="form-check-input p-3 filterprofession" type="checkbox" value="{{ $single->name }}"
                                                id="flexCheckChecked">
                                            <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                                {{ $single->name }}</span>
                                            </label>
                                        </div>
                                        <span id="totaldata" class="filter_size"></span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="common_button mt-5 text-center">
                                <button type="submit" id="clearFilterBtn"
                                    class="btn btn-danger waves-effect waves-light">CLEAR FILTER</button>
                            </div>
                        </div> --}}
                        <div class="common_filter_tehsil mt-4">
                            <h4 class="fw-bold common_filter_heading mb-4">RATINGS</h4>
                            <div>

                                <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                    <div>
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                                        <input class="form-check-input p-3" type="checkbox" value=""
                                            id="flexCheckChecked">
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
                            <div class="col-xl-4 col-lg-12 col-sm-12 col-md-12">
                                <div class="input-group  bg-white pe-3 mb-2 mt-2">
                                    <input type="search" placeholder="Search by title..."
                                        aria-describedby="button-addon1"
                                        class="form-control border-0 placeholder_search py-3 px-4">
                                    <div class="input-group-append align-self-center">
                                        <button id="button-plane" type="submit"
                                            class="btn btn-link text-white bg-danger"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6 d-flex align-items-center">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                    <label for="number" class="number_filter_label">SHOW : <select name="text"
                                            id="short_bye" class="py-2 px-5 bg-white border-1 showByNumber">
                                            <option value="">Select</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                    <label for="number" class="number_filter_label">SORT BY : <select name="text"
                                            id="short_bye" class="py-2 px-5 bg-white border-1 sortBy">
                                            <option value="">Select</option>
                                            <option value="old">Oldest</option>
                                            <option value="new">Latest</option>
                                        </select>
                                </div>
                            </div>
                        </div>


                        <div id="classify" class="row mt-5">

                            @foreach ($classified as $data)
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">

                                    <a href="{{ route('classified.single', $data->id) }}">
                                        <div class="card position-relative border-0 mb-3">
                                            <h6 class="classified_position_heading position-absolute">New</h6>
                                            <div class="hart_postion position-absolute">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                            <img src="{{ $data->image }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="card_date d-flex justify-content-between">
                                                    <div class="card_date_common mb-4 mobile_bg"><i
                                                            class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                    </div>
                                                    <div class="card_date_common mb-4"><i
                                                            class="fa fa-star rating-color me-2"></i>4.5
                                                    </div>
                                                </div>
                                                <h5 class="card-title mt-4">{{ $data->title }}</h5>
                                                <p class="card-text"><i class="fa-solid fa-location-dot "></i>
                                                    {{ $data->location }}</p>
                                                <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                                                    <?php
                                                    
                                                    $currentDate = date('Y-m-d'); // Add a semicolon here
                                                    $date2 = new DateTime($data->created_at);
                                                    
                                                    $interval = $date2->diff(new DateTime($currentDate)); // Call diff() on $date2
                                                    
                                                    echo $interval->format(' %a days ago'); // Output: -9 days
                                                    ?>
                                                </p>

                                                <div
                                                    class="classified_add_btn d-flex justify-content-between align-items-center">
                                                    <h6 class="fw-bold">${{ $data->price }}</h6>
                                                    <a href="{{ route('classified.single', $data->id) }}"
                                                        class="py-3">Read
                                                        More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @endforeach

                            <div class="d-flex justify-content-center">
                                {{ $classified->links('vendor.pagination.bootstrap-4') }}
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- member list section end -->
    </main>

@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // -----------------------Filter by tehsil-------------------

    $(document).ready(function() {
        var selectedTehsils = []; // Array to store selected tehsil names

        $('.filtertehsil').change(function() {
            var tehsilName = $(this).val();

            // var countElement = $(this).closest('.form-group').find('#totaldata');

            if ($(this).is(":checked")) {
                selectedTehsils.push(tehsilName); // Add the selected tehsil name to the array
            } else {
                var index = selectedTehsils.indexOf(tehsilName);
                if (index !== -1) {
                    selectedTehsils.splice(index,
                        1); // Remove the tehsil name from the array if unchecked
                }
            }

            // alert(selectedTehsils)


            $('#clearFilterBtn').on('click', function() {
                // Uncheck all checkboxes
                $('.filtertehsil').prop('checked', false);
                location.reload();

                return; // Exit the function to prevent further AJAX calls


            });


            if (selectedTehsils.length === 0) {
                // If no checkboxes are checked, reload the original data
                location.reload();
                return; // Exit the function to prevent further AJAX calls
            }

            // alert(selectedTehsils);

            $.ajax({
                url: baseUrl + "/getTehsilClassifiedData",
                method: 'GET',
                data: {
                    names: selectedTehsils
                },

                success: function(response) {

                    $('.filtertehsil').each(function() {
                        var tehsilName = $(this).val();
                        var countElement = $(this).closest('.form-group').find(
                            '#totaldata'
                        ); // Find the corresponding count display element

                        // Find the count of results for the current tehsil in the response
                        var tehsilCount = response.filter(function(item) {
                            return item.tehsil === tehsilName;
                        }).length;

                        // Update the count display with the count of results for the current tehsil
                        countElement.text(tehsilCount);
                    });





                    // Clear existing content
                    $('#classify').empty();

                    // Loop through the response data and append new content
                    $.each(response, function(index, data) {
                        var classifiedCard = `
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <div class="card position-relative border-0 mb-3">
                                        <h6 class="classified_position_heading position-absolute">New</h6>
                                        <div class="hart_postion position-absolute">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <img src="${data.image}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-4 mobile_bg">
                                                    <i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                </div>
                                                <div class="card_date_common mb-4">
                                                    <i class="fa fa-star rating-color me-2"></i>4.5
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">${data.title}</h5>
                                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>${calculateDaysAgo(data.created_at)}</p>
                                            <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                                <h6 class="fw-bold">$${data.price}</h6>
                                                <a href="/classified/single/${data.id}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                        $('#classify').append(classifiedCard);

                        <div class="d-flex justify-content-center">
                            {{ $classified->links('vendor.pagination.bootstrap-4') }}
                        </div>

                    });


                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }

            });



        });
    });

    // -----------------------Filter by oldest data -------------------

    $(document).ready(function() {
        $('.sortBy').change(function() {
            var sortBy = $(this).val(); // Get the selected option value
            // alert(sortBy)
            // Check if the selected option is "Date"
            if (sortBy === 'old') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/getsortedclassifieddata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#classify').empty();
                        $.each(response, function(index, data) {
                            var classifiedCard = `
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <div class="card position-relative border-0 mb-3">
                                        <h6 class="classified_position_heading position-absolute">New</h6>
                                        <div class="hart_postion position-absolute">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <img src="${data.image}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-4 mobile_bg">
                                                    <i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                </div>
                                                <div class="card_date_common mb-4">
                                                    <i class="fa fa-star rating-color me-2"></i>4.5
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">${data.title}</h5>
                                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>${calculateDaysAgo(data.created_at)}</p>
                                            <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                                <h6 class="fw-bold">$${data.price}</h6>
                                                <a href="/classified/single/${data.id}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#classify').append(classifiedCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });

    // -----------------------Filter by latest data -------------------

    $(document).ready(function() {
        $('.sortBy').change(function() {
            var sortBy = $(this).val(); // Get the selected option value
            // alert(sortBy)
            // Check if the selected option is "Date"
            if (sortBy === 'new') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/getsortedclassifieddataas",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#classify').empty();
                        $.each(response, function(index, data) {
                            var classifiedCard = `
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <div class="card position-relative border-0 mb-3">
                                        <h6 class="classified_position_heading position-absolute">New</h6>
                                        <div class="hart_postion position-absolute">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <img src="${data.image}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-4 mobile_bg">
                                                    <i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                </div>
                                                <div class="card_date_common mb-4">
                                                    <i class="fa fa-star rating-color me-2"></i>4.5
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">${data.title}</h5>
                                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>${calculateDaysAgo(data.created_at)}</p>
                                            <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                                <h6 class="fw-bold">$${data.price}</h6>
                                                <a href="/classified/single/${data.id}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#classify').append(classifiedCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });

    // -----------------------Filter by Show by Number -------------------

    $(document).ready(function() {
        $('.showByNumber').change(function() {
            var showBy = $(this).val(); // Get the selected option value
            // alert(showBy)
            // Check if the selected option is "Date"
            if (showBy === '10') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/gettenclassifieddata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#classify').empty();
                        $.each(response, function(index, data) {
                            var classifiedCard = `
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <div class="card position-relative border-0 mb-3">
                                        <h6 class="classified_position_heading position-absolute">New</h6>
                                        <div class="hart_postion position-absolute">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <img src="${data.image}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-4 mobile_bg">
                                                    <i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                </div>
                                                <div class="card_date_common mb-4">
                                                    <i class="fa fa-star rating-color me-2"></i>4.5
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">${data.title}</h5>
                                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>${calculateDaysAgo(data.created_at)}</p>
                                            <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                                <h6 class="fw-bold">$${data.price}</h6>
                                                <a href="/classified/single/${data.id}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#classify').append(classifiedCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
    // -----------------------Filter by Show by Number -------------------

    $(document).ready(function() {
        $('.showByNumber').change(function() {
            var showBy = $(this).val(); // Get the selected option value
            // alert(showBy)
            // Check if the selected option is "Date"
            if (showBy === '20') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/gettwentyclassifieddata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#classify').empty();
                        $.each(response, function(index, data) {
                            var classifiedCard = `
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <div class="card position-relative border-0 mb-3">
                                        <h6 class="classified_position_heading position-absolute">New</h6>
                                        <div class="hart_postion position-absolute">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                        <img src="${data.image}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="card_date d-flex justify-content-between">
                                                <div class="card_date_common mb-4 mobile_bg">
                                                    <i class="fa-solid fa-mobile-screen-button me-2 text-white"></i>Mobiles
                                                </div>
                                                <div class="card_date_common mb-4">
                                                    <i class="fa fa-star rating-color me-2"></i>4.5
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-4">${data.title}</h5>
                                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>${calculateDaysAgo(data.created_at)}</p>
                                            <div class="classified_add_btn d-flex justify-content-between align-items-center">
                                                <h6 class="fw-bold">$${data.price}</h6>
                                                <a href="/classified/single/${data.id}" class="py-3">Read More<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            $('#classify').append(classifiedCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });



    function calculateDaysAgo(created_at) {
        var currentDate = new Date();
        var date2 = new Date(created_at);
        var diffInMs = currentDate - date2;
        var diffInDays = Math.floor(diffInMs / (1000 * 60 * 60 * 24));
        return diffInDays + " days ago";
    }

    $(function() {
        $("#slider-range").slider({
            range: true,
            min: 130,
            max: 500,
            values: [130, 250],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>
