@extends('layouts.front')
@section('title', 'hhhh')
@section('content')
    <main>
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
                                                <x-form.textbox labelName="Email Address" parantClass="col-12 col-md-12" name="email" type="email" required="required" placeholder="Enter Email..!"  errorName="email" class="py-3 fs-5" value="{{ old('email') ?? '' }}"></x-form.textbox>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <x-form.textbox labelName="Password" parantClass="col-12 col-md-12" name="password" type="password" required="required" placeholder="Enter Password..!"  errorName="password" class="py-3 fs-5" value="{{ old('password') ?? '' }}"></x-form.textbox>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group align-items-center">
                                                <input class="form-check-input p-3" type="checkbox" value="" id="flexCheckChecked">
                                                <label class="form-check-label pt-2" for="flexCheckChecked">
                                                    I hereby accept the <span>Terms and conditions</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Login<i class="fa-solid fa-circle-plus ms-2"></i></button>
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
    </main>
@endsection
