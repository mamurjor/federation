@extends('layouts.front')
@section('title', 'About-us')
@section('content')
<main>
    <!-- breadcrumd section start -->
    <section id="breadcrumd_section" class="breadcrumd_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumd_heading text-center">
                        <h2 class="fw-bold">About Us</h2>
                        <span><a href="#" class="text-black">Home </a> / About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumd section end -->
    <!-- about us section start -->
    <section id="about_us_section" class="about_us_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ">
                    <div class="common_heading  about_left_text">
                        <h6 class="top_line">WELCOME TO</h6>
                        <h2 class="fw-bold mb-3 mt-3 ab_h2">Jutt Federation Pakistan <br> & International KSA </h2>
                        <p class="fw-normal">“ Meet the people redesigning the design process. See who’s answering your
                            calls, optimizing your experience, and constantly obsessing over your designs.Meet the
                            people redesigning the design process. See who’s answering your calls, optimizing your
                            experience, and constantly obsessing over your designs.Meet the people redesigning the
                            design process. See who’s answering your calls, optimizing your experience, and constantly
                            obsessing over your designs.Meet the people redesigning the design process. See who’s
                            answering your calls, optimizing your experience, and constantly obsessing over your
                            designs. “ </p>
                        <ul class="p-0 mt-4">
                            <li class="about_list_text mb-3"><img class="about_list_image me-3"
                                    src="{{ asset('frontend/assets/img/about_us_page/listimg.svg') }}" alt="">Highly Expart & Qualified Staff
                            </li>
                            <li class="about_list_text mb-3"><img class="about_list_image me-3"
                                    src="{{ asset('frontend/assets/img/about_us_page/listimg.svg') }}" alt="">Quality Materials</li>
                            <li class="about_list_text"><img class="about_list_image me-3"
                                    src="{{ asset('frontend/assets/img/about_us_page/listimg.svg') }}" alt="">Informed and helpful personnel.
                            </li>
                        </ul>
                        <div class="common_button mt-5">
                            <a href="{{ route('contact') }}">Contact Us<i class="fa-solid fa-circle-plus ms-2"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-4 about_img_birds">
                    <img src="{{ asset('frontend/assets/img/about_us_page/about_us_birds.png') }}" alt="">
                </div>
            </div>
            <div class="row align-items-center mb-5 mt-5">
                <div class="col-md-3"><img class="p_leftRight_image"
                        src= "{{ asset('frontend/assets/img/home_page/our_misson_section/rightimg.png') }}" alt=""></div>
                <div class="col-md-6">
                    <h6 class="about_left_right_text">Empowering Jutt Communities Worldwide for Unity, Prosperity, and
                        Cultural Preservation</h6>
                </div>
                <div class="col-md-3"><img class="p_leftRight_image"
                        src="{{ asset('frontend/assets/img/home_page/our_misson_section/leftimg.png') }}" alt=""></div>
            </div>
            <div class="blog_counter  py-5 px-4 bg-light rounded">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="widget-item text-center">
                            <div class="count_number d-flex align-items-center justify-content-center">
                                <h2 class="count fw-bold">12</h2>
                                <span class="ms-2 fw-bold">+</span>
                            </div>
                            <p class="fw-bold">Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="widget-item text-center">
                            <div class="count_number d-flex align-items-center justify-content-center">
                                <h2 class="count fw-bold">2000</h2>
                                <span class="ms-2 fw-bold">+</span>
                            </div>
                            <p class="fw-bold">Members</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="widget-item text-center">
                            <div class="count_number d-flex align-items-center justify-content-center">
                                <h2 class="count fw-bold">1500</h2>
                                <span class="ms-2 fw-bold">+</span>
                            </div>
                            <p class="fw-bold">Classified Ads</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="widget-item text-center">
                            <div class="count_number d-flex align-items-center justify-content-center">
                                <h2 class="count fw-bold">18</h2>
                                <span class="ms-2 fw-bold">K</span>
                            </div>
                            <p class="fw-bold">Matrimonial Profiles</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about us section end -->

    <!-- our mission start -->
    <section id="our_mission" class="our_mission">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common_heading text-center">
                        <img src="./img/home_page/our_misson_section/heading_img.png" alt="">
                        <h2 class="fw-bold mb-5 mt-5 text-white">Our Mission</h2>
                        <div class="row align-items-center">
                            <div class="col-md-3"><img class="p_leftRight_image"
                                    src="{{ asset('frontend/assets/img/home_page/our_misson_section/rightimg.png') }}" alt=""></div>
                            <div class="col-md-6">
                                <p class="fw-normal text-white">Empowering Jutt Communities Worldwide for Unity,
                                    Prosperity, and Cultural Preservation</p>
                            </div>
                            <div class="col-md-3"><img class="p_leftRight_image"
                                    src="{{ asset('frontend/assets/img/home_page/our_misson_section/leftimg.png') }}" alt=""></div>
                        </div>
                        <h5 class="text-left text-white mt-5">The Jutt Federation Pakistan & International KSA envisions
                            a world where Jutt individuals and organizations unite on a common platform, transcending
                            geographical boundaries to foster unity, prosperity, and the preservation of our rich
                            cultural heritage. We aim to create a global network that serves as a beacon of empowerment
                            for Jutt communities, facilitating collaboration, mutual support, and the exchange of ideas
                            and resources. Through our collective efforts, we strive to elevate the status and
                            well-being of Jutts everywhere, ensuring their voices are heard and their contributions
                            recognized on the global stage. Our vision is not only to strengthen the bonds within the
                            Jutt diaspora but also to actively engage with broader society, promoting understanding,
                            tolerance, and respect for diversity. Together, we aspire to build a brighter future where
                            every Jutt individual and organization thrives and contributes meaningfully to the
                            betterment of humanity.</h5>

                        <div class="carousel_btn_div our_mission_button_main">
                            <div class="common_button carosel_button1">
                                <a href="">Browse Ads <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="common_button">
                                <a href="">Sign Up Now<i class="fa-solid fa-circle-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our mission end -->
    <!-- Presidents & General Secretaries start -->
    <section id="presidents_and_secretaries" class="presidents_and_secretaries">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common_heading text-center">
                        <h6>Meet Now</h6>
                        <h2 class="fw-bold mb-3 mt-3">Presidents & General Secretaries</h2>
                        <p class="fw-normal">To provide a common platform to all Jutt Individual and Jutts Organization
                            from all over the world.</p>
                    </div>
                </div>
            </div>
            <div class="row card_main">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image text-center">
                                <img src="{{asset('backend/assets/img/avatars/1.png')  }}"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">Chairman</p>
                                <div class="social_icon  d-flex presi_icon_all">
                                    <a href="#"
                                        class="presi_icon rounded-circle fw-norma me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook "></i></a>
                                    <a href="#"
                                        class=" presi_icon rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class="presi_icon rounded-circle fw-normal me-3 bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team2.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center d-flex">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">President</p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team3.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">General Secretary </p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team4.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">Secretary!</p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team5.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">Chairman</p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team6.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">President</p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team7.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">General Secretary </p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6   mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card_image">
                                <img src="./img/home_page/presidents_and_secretaries_section/team8.png"
                                    class="card-img-top" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Hardson</h5>
                                <p class="card-text">Secretary!</p>
                                <div class="social_icon mt-5">
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#"
                                        class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Presidents & General Secretaries end -->
</main>
@endsection
