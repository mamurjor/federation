@extends('layouts.front')
@section('title', 'hhhh')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <main>
                    <section class="loginRegister_section" id="loginRegister_section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-10 col-lg-5">
                                    <div class="newpigeon_form">
                                        <ul class="nav nav-tabs d-lg-flex justify-content-center" id="myTab"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                                    aria-controls="home-tab-pane" aria-selected="true"><i
                                                        class="fa-solid fa-right-to-bracket"></i> Log in</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                    aria-controls="profile-tab-pane" aria-selected="false"><i
                                                        class="fa-solid fa-user-plus"></i> Sign Up</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content accordion" id="myTabContent">
                                            <div class="tab-pane fade show active accordion-item" id="home-tab-pane"
                                                role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="regiter_heading my-4">
                                                            <h4 class="fw-semibold">Welcome !</h4>
                                                            <p>Please log in to you account</p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <x-form.textbox labelName="Email Address" parantClass="col-12 col-md-12" name="email" type="email" required="required" placeholder="Enter Email..!"  errorName="email" class="py-3 fs-5" value="{{ old('email') ?? '' }}"></x-form.textbox>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="mb-3 mainpass">
                                                                <x-form.textbox labelName="Password" parantClass="col-12 col-md-12" name="password" type="password" required="required" placeholder="Enter Password..!"  errorName="password" class="py-3 fs-5" value="{{ old('password') ?? '' }}"></x-form.textbox>
                                                            </div>
                                                        </div>
                                                        <div class="newpigeon_button mb-3">
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger py-3 w-100">Log in</button>
                                                        </div>
                                                        <div class="account_rady">
                                                            <span>Don’t have an account? <a href="#"
                                                                    class="text-danger fw-semibold">Sigin Up</a></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel"
                                                aria-labelledby="profile-tab" tabindex="0">
                                                <div class="col-md-12">
                                                    <form action="{{ route('user.register.store') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="regiter_heading my-4">
                                                                <span>Great news ! Pedegree is free for you for 2
                                                                    years</span>
                                                                <h4 class="fw-semibold">Sign up</h4>
                                                                <p>Please provide your details</p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <x-form.textbox labelName="First Name" parantClass="col-12 col-md-12" name="fname" type="text" required="required" placeholder="Enter First Name..!"  errorName="fname" class="py-3 fs-5" value="{{ old('fname') ?? '' }}"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <x-form.textbox labelName="Last Name" parantClass="col-12 col-md-12" name="lname" type="text" required="required" placeholder="Enter Last Name..!"  errorName="lname" class="py-3 fs-5" value="{{ old('lname') ?? '' }}"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <x-form.textbox labelName="Email Address" parantClass="col-12 col-md-12" name="email" type="email" required="required" placeholder="Enter Email..!"  errorName="email" class="py-3 fs-5" value="{{ old('email') ?? '' }}"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <x-form.textbox labelName="Phone Number" parantClass="col-12 col-md-12" name="phone" type="tel" required="required" placeholder="Enter Phone Number..!"  errorName="phone" class="py-3 fs-5" value="{{ old('phone') ?? '' }}"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3 mainpass">
                                                                    <x-form.textbox labelName="Password" parantClass="col-12 col-md-12" name="password" type="password" required="required" placeholder="Enter Password..!"  errorName="password" class="py-3 fs-5" value="{{ old('password') ?? '' }}"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3 mainpass">
                                                                    <x-form.textbox labelName="Confirmation Password" parantClass="col-12 col-md-12" name="password_confirmation" type="password" required="required" placeholder="Enter Password..!"  errorName="password_confirmation" class="py-3 fs-5"></x-form.textbox>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="exampleCheck1">
                                                                    <label class="form-check-label" for="exampleCheck1">I
                                                                        agree the <span class="text-black">Terms and
                                                                            Conditions</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="newpigeon_button mb-3">
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger py-3 w-100">Sign
                                                                    up</button>
                                                            </div>
                                                            <div class="account_rady">
                                                                <span>Already have an account? <a href="#" class="text-danger fw-semibold">Log in</a></span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    {{-- <main>
        <section id="login_registration_section" class="registration_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="register_main_bg login_main_bg">
                            <div class="common_heading text-center">
                                <img src="./img/registration_page/res_logo.png" alt="">
                                <h2 class="fw-bold mb-3 mt-3 text-black">Login Now</h2>
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-4"><img class="p_leftRight_image" src="./img/home_page/our_misson_section/rightimg.png" alt=""></div>
                                    <div class="col-md-4"><p class="fw-normal text-black">Start a new Journey With Us.</p></div>
                                    <div class="col-md-4"><img class="p_leftRight_image" src="./img/home_page/our_misson_section/leftiimg.png" alt=""></div>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="text" name="email" class="form-control py-3 input_color" placeholder="Write your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Password <span class="text-danger">*</span></label>
                                                <input type="password" name="password" class="form-control py-3 input_color" placeholder="#######">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group align-items-center">
                                                <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label pt-2" for="flexCheckChecked">
                                                    I hereby accept the <span>Terms and conditions</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <button type="submit" class="py-4 w-100 border-0 resgiter_button rounded">Login<i class="fa-solid fa-circle-plus ms-2"></i></button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="row align-items-center mb-3 mt-4">
                                <div class="col-md-4"><img class="p_leftRight_image" src="./img/registration_page/res_right.png" alt=""></div>
                                <div class="col-md-4"><p class="fw-normal text-danger text-center img_mid_text">Forgot Your Password?</p></div>
                                <div class="col-md-4"><img class="p_leftRight_image" src="./img/registration_page/res_left.png" alt=""></div>
                            </div>
                            <h6 class="text-center have_account">Reset your password?<a href="#" class="text-danger"> Reset</a></h6>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main> --}}
@endsection
