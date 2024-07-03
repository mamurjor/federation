@extends('layouts.front')
@section('title', 'Wings')
@section('content')

    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold">Wings</h2>
                            <span><a href="#" class="text-black">Home</a> / Wings</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumd section end -->
        <!-- Presidents & General Secretaries start -->
        <section id="presidents_and_secretaries" class="tehsil_section">
            <div class="container">

                <div class="row card_main justify-content-between">
                    @foreach ($uniqueUserResults as $single)
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 mb-4 tehsil_bottom">
                            <a href="#">
                                <div class="card tehsil_card">
                                    <div class="card_image m-5">
                                        <img src="{{ $single->wingsnomini->user->userimage }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="card-body tehsil_card_body text-center">
                                        <h5 class="card-title text-white">{{ $single->wingsnomini->user->fname }}</h5>
                                        <p class="card-text text-white">{{ $single->votepositiontype }}</p>
                                    </div>
                                </div>
                                <div class="social_icon tehsil_social py-5 text-center  mt-5">
                                    <a href="#" class=" p-3 rounded-circle fw-normal me-3 bg-primary text-white"><i
                                            class="fa-brands fa-facebook"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal me-3 bg-info text-white"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class=" p-3 rounded-circle fw-normal bg-danger text-white"><i
                                            class="fa-brands fa-youtube"></i></a>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-9 col-lg-6 col-md-12 col-sm-12 mb-4">
                            <div class="common_heading tehsil_main">
                                <h6>Meet Our President!</h6>
                                <h2 class="fw-bold mb-3 mt-3">Mike Hardson</h2>
                                <p class="fw-normal">“ Meet the people redesigning the design process. See who’s
                                    answering your
                                    calls, optimizing your experience, and constantly obsessing over your designs.Meet
                                    the
                                    people redesigning the design process. See who’s answering your calls, optimizing
                                    your
                                    experience, and constantly obsessing over your designs.Meet the people redesigning
                                    the
                                    design process. See who’s answering your calls, optimizing your experience, and
                                    constantly
                                    obsessing over your designs.Meet the people redesigning the design process. See
                                    who’s
                                    answering your calls, optimizing your experience, and constantly obsessing over your
                                    designs. “ Meet the people redesigning the design process. See who’s answering your
                                    calls,
                                    optimizing your experience, and constantly obsessing over your designs.Meet the
                                    people
                                    redesigning the design process. See who’s answering your calls, optimizing your
                                    experience,
                                    and constantly obsessing over your designs.Meet the people redesigning the design
                                    process.””
                                </p>
                                <div class="row align-items-center mb-5 mt-5">
                                    <div class="col-md-5"><img class="p_leftRight_image"
                                            src="./img/home_page/our_misson_section/rightimg.png" alt=""></div>
                                    <div class="col-md-5"><img class="p_leftRight_image"
                                            src="./img/home_page/our_misson_section/leftiimg.png" alt=""></div>
                                </div>

                                <h4 class="mb-3">Contact Info: </h4>
                                <a href="tel:+2273003676" class="mb-4text-decoration-none tehsil_contact"><i
                                        class="fa-solid fa-phone me-2"></i> +227-300-3676 </a>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
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
                                        <a href="#" class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                                class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
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
                                        <a href="#" class=" p-3 rounded-circle fw-normal me-3 bg-black text-white"><i
                                                class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class=" p-3 rounded-circle fw-normal bg-info text-white"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
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
                    </div>
                </div>



            </div>
        </section>

        <!-- Presidents & General Secretaries end -->


        <section id="blog_section" class="blog_section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="common_heading">
                            <h6>OUR BLOG</h6>
                            <h2 class="fw-bold mt-4">Wings Latest News </h2>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="common_button">
                            <a href="#"> View More <i class="fa-regular fa-eye ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row blog_post_all">
                    @foreach ($blogpost as $single)
                        <div class="col-md-6 col-lg-3 col-sm-6">
                            <div class="card border-0 mb-3">
                                <img src="{{ $single->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card_date d-flex justify-content-between">
                                        <div class="card_date_common mb-2"><i
                                                class="fa-regular fa-circle-user me-2"></i>Admin
                                        </div>
                                        <div class="card_date_common mb-2"><i
                                                class="fa-solid fa-calendar-days me-2"></i>{{ $single->created_at }}</div>
                                    </div>
                                    <h5 class="card-title mt-4">{{ $single->title }}</h5>
                                    <p class="card-text">{{ $single->description }}</p>
                                    <div class="common_button mt-5 mb-3 blog_post_btn">
                                        <a href="#" class="py-3">Read More<i
                                                class="fa-solid fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- blog end -->

        <!-- lastest member start -->
        <section id="latest_member" class="latest_member">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="common_heading text-center">
                            <h6>Meet Now</h6>
                            <h2 class="fw-bold mb-3 mt-3">Latest Member Of This Tehsil</h2>
                            <p class="fw-normal">To provide a common platform to all Jutt Individual and Jutts Organization
                                from all over the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">

    
                </div>
            </div>
        </section>
        <!-- lastest member end -->

        <!-- join us section start -->
        <section id="join_us_section" class="join_us_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">All Members</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">Latest Ads</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="common_join_heading py-3 ps-3">
                            <h5 class="fw-bold">Matrimonials</h5>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">


                    <div class="col-md-6 col-sm-6 col-lg-4 mb-3">
                        <div class="common_join_box all_members_bg common_bg text-center">
                            <img src="./img/profession_page/allmembers_logo.png" class="w-25 mb-2" alt="">
                            <h3>Show our latest <br> Member.</h3>
                            <p>Get the best classified ads experience with <br> Jutt Federation Pakistan & International
                                KSA.</p>
                            <div class="common_button mt-5">
                                <a href="#" class="bg-white text-black border-white"> View Members <i
                                        class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 mb-3">
                        <div class="common_join_box lastest_bg common_bg text-center">
                            <img src="./img/home_page/join_us_section/join_box_icon.png" class="w-25 mb-2"
                                alt="">
                            <h3>Find Anything
                                Around You.</h3>
                            <p>Get the best classified ads experience with Jutt Federation Pakistan & International KSA.</p>
                            <div class="common_button mt-5">
                                <a href="#" class="bg-danger border-danger"> View Ads <i
                                        class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 mb-3">
                        <div class="common_join_box matrimonials_bg common_bg text-center">
                            <img src="./img/home_page/join_us_section/metrimonials_icon.png" class="w-25 mb-1"
                                alt="">
                            <h3>Find your Right Match here</h3>
                            <p>It is a long established fact that a reader will be distracted by the read is that it has
                                desktop publishing packages and web page normal distribution of letters</p>
                            <div class="common_button mt-5">
                                <a href="#"> View Profile <i class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- join us section  end -->
    </main>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script></script>
