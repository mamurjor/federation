@extends('layouts.front')
@section('title', 'SingleBlog')
@section('content')



    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold fs-2">Single Blog</h2>
                            <span class="mtsingel"><a href="#" class="text-black mtsingel">Home</a> / <a href="#" class="text-black mtsingel">Cast
                                    List </a> / Single Blog</span>
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
                    <div class="col-md-12 col-lg-8 col-xl-9 single_blog_pd">
                        <div class="card border-0 mb-3 single_blog position-relative">
                            @php
                                $doc = new \DOMDocument();
                                $doc->loadHTML($singleblog->content);

                                // Find all img tags
                                $images = $doc->getElementsByTagName('img');

                                // Loop through each img tag and get src attribute
                                foreach ($images as $image) {
                                    $src = $image->getAttribute('src');
                                }
                            @endphp
                            <img src="{{ $src }}" class="card-img-top mb-2" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between pb-2">
                                    <div class="card_date_common mb-2 pt-2"><i class="fa-regular fa-circle-user me-2"></i>
                                        @if ($user->role_id == 1)
                                            Admin
                                        @elseif ($user->role_id == 2)
                                            Client
                                        @else
                                            User
                                        @endif
                                    </div>
                                    <div class="card_date_common mb-2 pt-2 "><i
                                            class="fa-solid fa-calendar-days me-2"></i>{{ $singleblog->created_at }}</div>
                                    <div class="card_date_common mb-2 pt-2"><i
                                            class="fa-solid fa-tag me-2"></i>{{ $category->name }}</div>
                                </div>
                            </div>
                            <div class="single_blog_heading position-absolute">
                                <h6><span class="politics"> </span>Politics</h6>
                                <h4 class="fw-bold mt-4">{{ $singleblog->description }}</h4>
                            </div>
                        </div>
                        <div class="common_heading cast_single_heading single_blog_top">
                            <h2 class="fw-bold mb-3 mt-3">{{ $singleblog->title }}</h2>
                        </div>
                        <div class="common_heading cast_single_heading single_blog_top">
                            @php
                                // $content = strip_tags($singleblog->content);
                                $singleblog->content = preg_replace(
                                    '/<h2(.*?)>/i',
                                    '<h2 class="fw-bold mb-3 mt-3">',
                                    $singleblog->content,
                                );
                                $singleblog->content = preg_replace(
                                    '/<p(.*?)>/i',
                                    '<p class="fw-normal">',
                                    $singleblog->content,
                                );
                            @endphp

                            {{-- <p class="fw-normal">
                                {{ $content }}
                            </p> --}}
                        </div>


                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-3">
                        <div class="common_join_heading common_filter_tehsil py-3 ps-3 mb-4">
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
                        <div class="common_join_heading common_filter_tehsil py-3 ps-3 mb-4 mt-4">
                            <h5 class="fw-bold">Recent Blogs</h5>
                        </div>
                        <div class="card border-0 mb-3">
                            <img src="{{ $singleblog->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-2 blogcard_date"><i class="fa-regular fa-circle-user me-2"></i>Admin
                                    </div>
                                    <div class="card_date_common mb-2 blogcard_date"><i
                                            class="fa-solid fa-calendar-days me-2"></i>December 04, 2023</div>
                                </div>
                                <h5 class="card-title mt-1 bog_title">There Are Many Variations</h5>
                                <p class="card-text blog_text">There Are Many Variations For<br> Passages Available Suffer.</p>
                                <div class="common_button mt-3 mb-3  blog_post_btn">
                                    <a href="#" class="py-2 blog_btn">Read More<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <img src="{{ $singleblog->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-2 blogcard_date"><i class="fa-regular fa-circle-user me-2"></i>Admin
                                    </div>
                                    <div class="card_date_common mb-2 blogcard_date"><i
                                            class="fa-solid fa-calendar-days me-2"></i>December 04, 2023</div>
                                </div>
                                <h5 class="card-title mt-1 bog_title">There Are Many Variations</h5>
                                <p class="card-text blog_text">There Are Many Variations For<br> Passages Available Suffer.</p>
                                <div class="common_button mt-3 mb-3  blog_post_btn">
                                    <a href="#" class="py-2 blog_btn">Read More<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <img src="{{ $singleblog->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card_date d-flex justify-content-between">
                                    <div class="card_date_common mb-2 blogcard_date"><i class="fa-regular fa-circle-user me-2"></i>Admin
                                    </div>
                                    <div class="card_date_common mb-2 blogcard_date"><i
                                            class="fa-solid fa-calendar-days me-2"></i>December 04, 2023</div>
                                </div>
                                <h5 class="card-title mt-1 bog_title">There Are Many Variations</h5>
                                <p class="card-text blog_text">There Are Many Variations For<br> Passages Available Suffer.</p>
                                <div class="common_button mt-3 mb-3  blog_post_btn">
                                    <a href="#" class="py-2 blog_btn">Read More<i
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
