@extends('layouts.front')
@section('title', 'Contact')
@section('content')
    <main>
        <!-- breadcrumd section start -->
        <section id="breadcrumd_section" class="breadcrumd_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumd_heading text-center">
                            <h2 class="fw-bold fs-2">Contact Us</h2>
                            <span class="mtsingel"><a href="#" class="text-black mtsingel">Home</a> / Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumd section end -->
        <!-- form section end -->
        <section id="contact_form_section" class="contact_form_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-6 contact_form_right_pd">
                        <div class="common_heading ">
                            <h6 class="con_top_title">CONTACT US</h6>
                            <h2 class="fw-bold con_title mb-3 mt-3 ">{{ config('settings.title') }}</h2>
                            <p class="fw-normal con_sub">{{ config('settings.subtitle') }}</p>
                        </div>
                        <div class="social_icon contact_form_social mt-5">
                            <a href="{{ config('settings.furl') }}" class="bg-white   fw-normal con_icon"><i
                                    class="{{ config('settings.ficon') }} cont_i"></i></a>
                            <a href="{{ config('settings.turl') }} cont_i" class="bg-white   fw-normal con_icon"><i
                                    class="{{ config('settings.ticon') }} cont_i"></i></a>
                            <a href="{{ config('settings.lurl') }}" class="bg-white  fw-normal con_icon"><i
                                    class="{{ config('settings.licon') }} cont_i"></i></a>
                            <a href="{{ config('settings.yurl') }}" class="bg-white   fw-normal con_icon"><i
                                    class="{{ config('settings.yicon') }} cont_i"></i></a>
                        </div>
                        <div class="contact_icon d-flex align-items-center gap-4 mt-4">
                            <div class="contact_phone_icon">
                                <img src="{{ asset('frontend/assets/img/contact_page/phone.svg') }}" alt="">
                            </div>
                            <div class="contact_phone_heading">
                                <h6 class="contact_label">Call us</h6>
                                <p class="contact_text">{{ config('settings.phone') }}</p>
                            </div>
                        </div>
                        <div class="contact_icon d-flex align-items-center gap-4 mt-4">
                            <div class="contact_phone_icon">
                                <img src=" {{ asset('frontend/assets/img/contact_page/mail.svg') }}" alt="">
                            </div>
                            <div class="contact_phone_heading">
                                <h6 class="contact_label">Mail to Us</h6>
                                <p class="contact_text">{{ config('settings.email') }}</p>
                            </div>
                        </div>
                        <div class="contact_icon d-flex align-items-center gap-4 mt-4">
                            <div class="contact_phone_icon">
                                <img src="{{ asset('frontend/assets/img/contact_page/location.svg') }}" alt="">
                            </div>
                            <div class="contact_phone_heading">
                                <h6 class="contact_label">Location</h6>
                                <p class="contact_text">{{ config('settings.location') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="contact_main_form">
                            <form id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                class="form-control py-3 ps-4 contact_input mb-4" placeholder="Name here..."
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control py-3 ps-4 contact_input mb-4"
                                                placeholder="Write Your Email..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone"
                                                class="form-control py-3 ps-4 contact_input mb-4"
                                                placeholder="Phone Number..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="address"
                                                class="form-control py-3 ps-4 contact_input mb-4"
                                                placeholder="Your address.." required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control contact_input mb-4" cols="20" rows="4"
                                                placeholder="Your message..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="w-100 py-2 fs-6 btn btn-md contact_form_button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center contact_form_main_left_right">
                    <div class="col-md-4"><img class="p_leftRight_image"
                            src="{{ asset('frontend/assets/img/home_page/our_misson_section/rightimg.png') }}" alt=""></div>
                    <div class="col-md-4">
                        <h6 class="contact_form_left_right_text text-center">View Our Location on Google Map</h6>
                    </div>
                    <div class="col-md-4"><img class="p_leftRight_image"
                            src="{{ asset('frontend/assets/img/home_page/our_misson_section/leftimg.png') }}" alt=""></div>
                </div>
                <div class="col-md-12">
                    <div class="contact_map">
                        <iframe
                            src="{{ config('settings.map') }}"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- form section end -->

    </main>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            // console.log($(this).serialize());
            $.ajax({
                type: 'POST',
                url: baseUrl + '/contacts',
                data: $(this).serialize(),
                
                success: function(response) {
                    alert(response.message);
                    $('#contactForm')[0].reset(); 
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessages = '';

                    for (var error in errors) {
                        errorMessages += errors[error] + '\n';
                    }

                    alert('Error:\n' + errorMessages);
                }
            });
        });
    });
</script>
