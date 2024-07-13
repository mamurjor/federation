@extends('layouts.front')
@section('title', 'Matromonial')
@section('content')

    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold fs-2">Matrimonial</h2>
                            <span><a href="#" class="text-black">Home</a> / Matrimonial</span>
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
                        <form id="searchbyform" action="{{ route('getmatromonialbysearch') }}" method="POST">
                            @csrf
                            <div class="common_filter_tehsil mb-4">
                                <h4 class="fw-bold common_filter_heading mb-4">LOOKING FOR</h4>
                                {{-- <div class="form-gorup mb-3">
                                <label for="form-label" class="form-label looking_filter_label">I'm looking for a</label>
                                <select id="loking" class="form-control looking_filter_input" name="loking">
                                    <option>Select Bride</option>
                                    <option>Bride</option>
                                    <option>Bride</option>
                                </select>
                            </div> --}}

                                <div class="form-gorup mb-3">
                                    <label for="form-label" class="form-label looking_filter_label">MARITAL STATUS</label>
                                    <select id="Single" class="form-select looking_filter_input" name="Single">
                                        @foreach ($marital as $single)
                                            <option value="{{ $single->name }}">{{ $single->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-gorup mb-3">
                                    <label for="form-label" class="form-label looking_filter_label">RELIGION</label>
                                    <select id="religion" class="form-select looking_filter_input" name="religion">
                                        @foreach ($allreligion as $single)
                                            <option value="{{ $single->name }}">{{ $single->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-gorup mb-3">
                                    <label for="form-label" class="form-label looking_filter_label">CASTE / SECT</label>
                                    <select id="caste_sect" class="form-select looking_filter_input" name="caste_sect">
                                        @foreach ($allcast as $single)
                                            <option value="{{ $single->name }}">{{ $single->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-gorup mb-3">
                                    <label for="form-label" class="form-label looking_filter_label">PROFESSION</label>
                                    <select id="Teacher" class="form-select looking_filter_input" name="profession">
                                        @foreach ($allprofession as $single)
                                            <option value="{{ $single->name }}">{{ $single->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-gorup mb-3">
                                        <label for="form-label" class="form-label looking_filter_label">AGE</label>
                                        <select id="age" class="form-control looking_filter_input" name="age">
                                            <option value="">Select age</option>
                                            <option value="36">36</option>
                                            <option value="24">24</option>
                                        </select>
                                    </div> --}}
                                <div class="common_button mt-5 text-center">

                                    <button class="matro_btn" type="submit"> Search Now
                                    </button>
                                    {{-- // <a href="{{ route('getmatromonialbysearch')}}">Search Now</a> --}}
                                </div>
                            </div>
                        </form>
                        <div class="common_filter_tehsil">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY TEHSIL</h4>
                            <input class="form-control py-2 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">

                                @foreach ($getalltehsil as $singlevalue)
                                    <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                        <div>
                                            <input class="form-check-input p-2 check_style filter-checkbox" type="checkbox"
                                                value="{{ $singlevalue->name }}" id="flexCheckChecked">
                                            <label class="form-check-label pt-1 ms-3 filter_size" for="flexCheckChecked">
                                                {{ $singlevalue->name }}</span>
                                            </label>
                                        </div>
                                        <span id="" class="filter_size totaldata"></span>
                                    </div>
                                @endforeach


                            </div>
                            <div class="common_button mt-5 text-center">
                                <a type="submit" class="bg-white filter_btn">CLEAR
                                    FILTER</a>
                            </div>
                        </div>
                        <div class="common_filter_tehsil mt-4">
                            <h4 class="fw-bold common_filter_heading mb-4">FILTER BY PROFESSION</h4>
                            <input class="form-control py-2 search_input mb-4" type="search" name="search"
                                placeholder="search">
                            <div class="common_filter_check">
                                @foreach ($allprofession as $single)
                                    <div class="form-group align-items-center d-flex justify-content-between mb-2 me-3">
                                        <div>
                                            <input class="form-check-input p-2 check_style filterProfession" type="checkbox"
                                                value="{{ $single->name }}" id="flexCheckChecked">
                                            <label class="form-check-label pt-1 ms-2 filter_size" for="flexCheckChecked">
                                                {{ $single->name }}</span>
                                            </label>
                                        </div>
                                        <span id="" class="filter_size totaldata"></span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="common_button mt-5 text-center">
                                <a type="submit" id=""
                                    class="bg-white filter_btn">CLEAR FILTER</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="row common_filter_top rounded py-2 px-3 align-items-center">
                            <div class="col-xl-4 col-lg-12 col-sm-12 col-md-12">
                                <div class="input-group  bg-white pe-3 mb-2 mt-2">
                                    <input type="search" id="search-input" placeholder="Search by title.."
                                        aria-describedby="button-addon1"
                                        class="form-control border-0 placeholder_search py-2 px-4">
                                    <div class="input-group-append align-self-center">
                                        <button id="button-plane" type="submit"
                                            class="btn btn-link text-white bg-danger"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6 d-flex align-items-center">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">
                                    <div class="row g-1">
                                        <label for="number" class="number_filter_label col-sm-4 filter_title_2">SHOW
                                            :
                                        </label>
                                        <div class="col-sm-6">
                                            <select class="form-select filter_form_2 showByNumber" name="text"
                                            id="short_bye" aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6 col-md-6">
                                <div class="input-group bg-white py-3 justify-content-center rounded mb-2 mt-2">

                                    <div class="row g-1">
                                        <label for="number" class="number_filter_label col-sm-4 filter_title_2">SHORT BY
                                            : </label>
                                        <div class="col-sm-6">
                                            <select class="form-select filter_form_2 fs-6 sortBy" name="text"
                                                id="short_bye" aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="old">Oldest</option>
                                                <option value="new">Latest</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <label for="number" class="number_filter_label">SORT BY : <select name="text"
                                            id="short_bye" class="py-2 px-5 bg-white border-1 sortBy">
                                            <option value="">Select</option>
                                            <option value="old">Oldest</option>
                                            <option value="new">Latest</option>
                                        </select> --}}
                                </div>
                            </div>
                        </div>


                        <div id="matro" class="row mt-5">

                            @foreach ($matromonial as $data)
                                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                                    <a href="{{ route('matromonial.single', $data->id) }}">
                                        <div class="card border-0 mb-3">
                                            <div class="text-center py-3">
                                                <img src="{{ $data->matromonialimage }}"
                                                    class="card-img-top matrimonial_img" alt="...">
                                            </div>
                                            <div class="card-body text-center">
                                                <div class="card_date d-flex justify-content-between">
                                                    <h6 class="card_age_year">{{ $data->age }}</h6>
                                                    <h6 class="card_age_year bg-warning">{{ $data->height }}</h6>
                                                    <h6 class="card_age_year bg-danger">{{ $data->religion }}</h6>
                                                    <h6 class="card_age_year bg-primary">{{ $data->education }}</h6>
                                                </div>
                                                <h5 class="card-title mt-4">{{ $data->name }}</h5>
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
                                                    class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                                                    <a
                                                        href="mailto:{{ $data->email }}?subject=Your%20Subject&body=Your%20Message%20Here">

                                                        <h6 class="fw-bold matrimonial_add_btn matro_phone"><i
                                                                class="fa-solid fa-phone"></i>
                                                            contact</h6>
                                                    </a>
                                                    <a href="{{ route('matromonial.single', $data->id) }}"
                                                        class="py-3">View
                                                        Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            <div class="d-flex justify-content-center">
                                {{ $matromonial->links('vendor.pagination.bootstrap-4') }}
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
    // ------------------ filter by form ------------- 

    $(document).ready(function() {
        // Capture form submission event
        $('#searchbyform').submit(function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Serialize form data
            var formData = $(this).serialize();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: baseUrl + "/getmatromonialbysearch",
                data: formData,
                success: function(response) {

                    $('#matro').empty();

                    // Loop through the response data and append new content
                    $.each(response, function(index, data) {
                        var matrimonialCard = `
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
                            <div class="card border-0 mb-3">
                            <div class="text-center py-3">
                            <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                            </div>
                            <div class="card-body text-center">
                            <div class="card_date d-flex justify-content-between">
                                <h6 class="card_age_year">${data.age}</h6>
                                <h6 class="card_age_year bg-warning">${data.height}</h6>
                                <h6 class="card_age_year bg-danger">${data.religion}</h6>
                                <h6 class="card_age_year bg-primary">${data.education}</h6>
                            </div>
                            <h5 class="card-title mt-4">${data.name}</h5>
                            <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                            <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                                ${calculateDaysAgo(data.created_at)}
                            </p>
                            <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                                <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                                    <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                                </a>
                                <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                            </div>
                            </div>
                            </div>
                            </div>`;
                        $('#matro').append(matrimonialCard);

                    });

                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors
                    console.error("AJAX Error:", xhr.responseText);
                    // Display error message or handle the error appropriately
                }
            });


        });
    });

    // ------------------ filter by tehsil ------------- 

    $(document).ready(function() {
        var selectedTehsils = []; // Array to store selected tehsil names

        $('.filter-checkbox').change(function() {
            var tehsilName = $(this).val();

            // var countElement = $(this).closest('.form-group').find('.totaldata');

            if ($(this).is(":checked")) {
                selectedTehsils.push(tehsilName); // Add the selected tehsil name to the array
            } else {
                var index = selectedTehsils.indexOf(tehsilName);
                if (index !== -1) {
                    selectedTehsils.splice(index,
                        1); // Remove the tehsil name from the array if unchecked
                }
            }


            $('.clearFilterBtn').on('click', function() {
                // Uncheck all checkboxes
                $('.filter-checkbox').prop('checked', false);
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
                url: baseUrl + "/getTehsilData",
                method: 'GET',
                data: {
                    names: selectedTehsils
                },

                success: function(response) {

                    $('.filter-checkbox').each(function() {
                        var tehsilName = $(this).val();
                        var countElement = $(this).closest('.form-group').find(
                            '.totaldata'
                        ); // Find the corresponding count display element

                        // Find the count of results for the current tehsil in the response
                        var tehsilCount = response.filter(function(item) {
                            return item.tehsil === tehsilName;
                        }).length;

                        // Update the count display with the count of results for the current tehsil
                        countElement.text(tehsilCount);
                    });





                    // Clear existing content
                    $('#matro').empty();

                    // Loop through the response data and append new content
                    $.each(response, function(index, data) {
                        var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                        $('#matro').append(matrimonialCard);

                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }

            });



        });
    });

    // ------------------ filter by Profession ------------- 

    $(document).ready(function() {
        var selectedProfession = []; // Array to store selected tehsil names

        $('.filterProfession').change(function() {
            var professionName = $(this).val();


            if ($(this).is(":checked")) {
                selectedProfession.push(
                    professionName); // Add the selected profession name to the array
            } else {
                var index = selectedProfession.indexOf(professionName);
                if (index !== -1) {
                    selectedProfession.splice(index,
                        1); // Remove the profession name from the array if unchecked
                }
            }


            $('.clearFilterBtn').on('click', function() {
                // Uncheck all checkboxes
                $('.filterProfession').prop('checked', false);
                location.reload();

                return; // Exit the function to prevent further AJAX calls


            });


            if (selectedProfession.length === 0) {
                // If no checkboxes are checked, reload the original data
                location.reload();
                return; // Exit the function to prevent further AJAX calls
            }

            // alert(selectedProfession);

            $.ajax({
                url: baseUrl + "/getProfessionData",
                method: 'GET',
                data: {
                    names: selectedProfession
                },

                success: function(response) {

                    $('.filterProfession').each(function() {
                        var professionName = $(this).val();
                        // alert(professionName);
                        var countElement = $(this).closest('.form-group').find(
                            '.totaldata'
                        ); // Find the corresponding count display element

                        // Find the count of results for the current profession in the response
                        var professionCount = response.filter(function(item) {
                            return item.occupation === professionName;
                        }).length;

                        // Update the count display with the count of results for the current profession
                        countElement.text(professionCount);
                    });





                    // Clear existing content
                    $('#matro').empty();

                    // Loop through the response data and append new content
                    $.each(response, function(index, data) {
                        var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                        $('#matro').append(matrimonialCard);

                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }

            });



        });
    });

    function calculateDaysAgo(created_at) {
        var currentDate = new Date();
        var date2 = new Date(created_at);
        var diffInMs = currentDate - date2;
        var diffInDays = Math.floor(diffInMs / (1000 * 60 * 60 * 24));
        return diffInDays + " days ago";
    }

    // ------------------ filter by Oldest ------------- 

    $(document).ready(function() {
        $('.sortBy').change(function() {
            var sortBy = $(this).val(); // Get the selected option value
            // alert(sortBy)
 
            if (sortBy === 'old') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/getsorteddata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#matro').empty();
                        $.each(response, function(index, data) {
                            var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${ data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                            $('#matro').append(matrimonialCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });

    // ------------------ filter by latest ------------- 

    $(document).ready(function() {
        $('.sortBy').change(function() {
            var sortBy = $(this).val(); // Get the selected option value
            // alert(sortBy)
            // Check if the selected option is "Date"
            if (sortBy === 'new') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/getsorteddataas",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#matro').empty();
                        $.each(response, function(index, data) {
                            var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${ data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                            $('#matro').append(matrimonialCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });

    // ------------------ filter by number ------------- 

    $(document).ready(function() {
        $('.showByNumber').change(function() {
            var showBy = $(this).val(); // Get the selected option value
            // alert(showBy)
          
            if (showBy === '10') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/gettendata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        console.log(response);
                        $('#matro').empty();
                        $.each(response, function(index, data) {
                            var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${ data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                            $('#matro').append(matrimonialCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
    // ------------------ filter by number ------------- 

    $(document).ready(function() {
        $('.showByNumber').change(function() {
            var showBy = $(this).val(); // Get the selected option value
            // alert(showBy)
            // Check if the selected option is "Date"
            if (showBy === '20') {
                // Make an AJAX request to sort data by date
                $.ajax({
                    url: baseUrl + "/getwentydata",
                    method: 'GET',
                    success: function(response) {
                        // Handle the sorted data returned in the response
                        // console.log(response);
                        $('#matro').empty();
                        $.each(response, function(index, data) {
                            var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${ data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                            $('#matro').append(matrimonialCard);

                        });


                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });


    //----------------- Filter by Title --------------------

    $(document).ready(function() {
        $('#button-plane').on('click', function(e) {
            e.preventDefault();
            let query = $('#search-input').val();
            $.ajax({
                url: '{{ route('getNameData') }}',
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    // console.log(response);
                    $('#matro').empty();
                    if (response.length > 0) {
                        $.each(response, function(index, data) {
                            var matrimonialCard = `
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4 mb-4">
            <div class="card border-0 mb-3">
                <div class="text-center py-3">
                    <img src="${data.matromonialimage}" class="card-img-top matrimonial_img" alt="...">
                </div>
                <div class="card-body text-center">
                    <div class="card_date d-flex justify-content-between">
                        <h6 class="card_age_year">${data.age}</h6>
                        <h6 class="card_age_year bg-warning">${data.height}</h6>
                        <h6 class="card_age_year bg-danger">${data.religion}</h6>
                        <h6 class="card_age_year bg-primary">${data.education}</h6>
                    </div>
                    <h5 class="card-title mt-4">${data.name}</h5>
                    <p class="card-text"><i class="fa-solid fa-location-dot "></i> ${ data.location}</p>
                    <p class="card-text mt-2"><i class="fa-regular fa-clock"></i>
                        ${calculateDaysAgo(data.created_at)}
                    </p>
                    <div class="classified_add_btn d-flex justify-content-between align-items-center pt-3">
                        <a href="mailto:${data.email}?subject=Your%20Subject&body=Your%20Message%20Here">
                            <h6 class="fw-bold matrimonial_add_btn"><i class="fa-solid fa-phone"></i> contact</h6>
                        </a>
                        <a href="${data.route}" class="py-3">View Profile<i class="fa-solid fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>`;
                            $('#matro').append(matrimonialCard);

                        });
                    } else {
                        $('#matro').append('<div>No results found</div>');
                    }
                    $('#search-input').val('');
                }
            });
        });
    });
</script>
