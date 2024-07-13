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
                            <h2 class="fw-bold fs-2">Single Matrimonial</h2>
                            <span><a href="#" class="text-black mtsingel">Home </a> / <a href="#"
                                    class="text-black mtsingel">Matrimonial </a class="mtsingel"> / single Matrimonial</span>
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
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-5 col-xl-4">
                                <div class="card single_matrimonial_blog border-0 mb-3">
                                    <div class="text-center py-2">
                                        <img src="{{ $matromonialsingle->matromonialimage }}"
                                            class="card-img-top matrimonial_img" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title pt-4 border-top single_matrimonial_common">
                                            {{ $matromonialsingle->name }}</h5>
                                        <p class="card-text mt-2 single_matrimonial_common">

                                            <?php
                                            
                                            // Assuming $matromonialsingle->aboutme contains the full text
                                            
                                            $about_me = $matromonialsingle->aboutme;
                                            $desired_part = substr($about_me, 0, strpos($about_me, 'intention') + strlen('intention.'));
                                            
                                            echo $desired_part;
                                            
                                            ?>
                                            {{-- {{ $matromonialsingle->aboutme }} --}}
                                        </p>

                                        <div class="classified_add_btn  justify-content-between pt-3">
                                            <p class="card-text single_matrimonial_common"><i
                                                    class="fa-solid fa-location-dot"></i> {{ $matromonialsingle->location }}
                                            </p>
                                            <p class="card-text mt-2 single_matrimonial_common"><i
                                                    class="fa-regular fa-clock"></i>
                                                <?php
                                                
                                                $currentDate = date('Y-m-d'); // Add a semicolon here
                                                $date2 = new DateTime($matromonialsingle->created_at);
                                                
                                                $interval = $date2->diff(new DateTime($currentDate)); // Call diff() on $date2
                                                
                                                echo $interval->format('%a days ago'); // Output: -9 days
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-7 col-xl-8">
                                <div class="common_single_bg bg-white py-5 px-5 rounded">
                                    <div class="single_add_heading">
                                        <h3 class="fw-bold mb-2 fs-4">Basic Information</h3>
                                    </div>
                                    <div class="single_add_box mt-5">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Full Name: <span
                                                            class="ms-3">{{ $matromonialsingle->name }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Phone No: <span class="ms-3">+9234567899</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Email: <span class="ms-3"> {{ $matromonialsingle->email }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>District: <span
                                                            class="ms-3">{{ $matromonialsingle->district }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Tehsil: <span class="ms-3">
                                                            {{ $matromonialsingle->tehsil }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>City: <span class="ms-3">{{ $matromonialsingle->tehsil }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Address: <span class="ms-3">{{ $matromonialsingle->location }}
                                                        </span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Division: <span
                                                            class="ms-3">{{ $matromonialsingle->Division }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Education: <span
                                                            class="ms-3">{{ $matromonialsingle->education }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Profession: <span
                                                            class="ms-3">{{ $matromonialsingle->occupation }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Age: <span class="ms-3">{{ $matromonialsingle->age }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Height: <span
                                                            class="ms-3">{{ $matromonialsingle->height }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Religion: <span
                                                            class="ms-3">{{ $matromonialsingle->religion }}</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-6">
                                                <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                                    <h6>Cast: <span class="ms-3">{{ $matromonialsingle->caste }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading">
                                <h3 class="fw-bold mb-2 fs-4">Description:</h3>
                            </div>
                            <div class="single_add_heading border-0 mt-4 matro_desc">
                                {!! $matromonialsingle->aboutme !!}
                            </div>
                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading">
                                <h3 class="fw-bold mb-2 fs-4">Employment/Business Status Description:</h3>
                            </div>
                            <div class="single_add_heading border-0 mt-4 matro_desc">
                                {!! $matromonialsingle->buisness_des !!}
                            </div>
                        </div>
                        <div class="common_single_bg bg-white py-5 px-5 rounded mt-5">
                            <div class="single_add_heading">
                                <h3 class="fw-bold mb-2 fs-4">Partner Preferences:</h3>
                            </div>
                            <div class="single_add_box mt-2">
                                <div class="single_add_heading border-0 mt-4">
                                    <p class="mb-2 matro_desc">{!! $matromonialsingle->partner_requirment_text !!}</p><br>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                            <h6>Age Range: <span
                                                    class="ms-3">{{ $matromonialsingle->partner_age_range }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                            <h6>Location: <span
                                                    class="ms-3">{{ $matromonialsingle->partner_location }}</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                            <h6>Compatibility: <span
                                                    class="ms-3">{{ $matromonialsingle->partner_compatibility }}</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_add_box1 py-3 px-3 border rounded mb-3">
                                            <h6>Communication: <span
                                                    class="ms-3">{{ $matromonialsingle->partner_communication }}</span>
                                            </h6>
                                        </div>
                                    </div>
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
