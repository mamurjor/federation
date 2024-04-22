@extends('layouts.front')
@section('title',$title)
@section('content')
   
    <main>
        <section id="login_registration_section" class="registration_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="register_main_bg">
                            <div class="common_heading text-center">
                                <img src="./img/registration_page/res_logo.png" alt="">
                                <h2 class="fw-bold mb-3 mt-3 text-black">Create An Account</h2>
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-4"><img class="p_leftRight_image" src="./img/home_page/our_misson_section/rightimg.png" alt=""></div>
                                    <div class="col-md-4"><p class="fw-normal text-black">Setup a new account in a minute.</p></div>
                                    <div class="col-md-4"><img class="p_leftRight_image" src="./img/home_page/our_misson_section/leftiimg.png" alt=""></div>
                                </div>
                            </div>
                            <form action="{{ route('user.register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">CNIC No. <span class="text-danger">*</span></label>
                                                <input type="text" name="cnic_no" class="form-control py-3 input_color" placeholder="35220 - 1506373 -1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">First Name <span class="text-danger">*</span></label>
                                                <input type="text" name="fname" class="form-control py-3 input_color" placeholder="Write your First name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Middle Name <span class="text-danger">*</span></label>
                                                <input type="text" name="mname" class="form-control py-3 input_color" placeholder="Write your Middle Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                <input type="text" name="lname" class="form-control py-3 input_color" placeholder="Write your last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Select District <span class="text-danger">*</span></label>
                                                <select name="select_district" id="select_district" class="form-control input_color py-3">
                                                    <option value="">your District</option>
                                                    <option value="dis"> District</option>
                                                    <option value="dis"> District</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Select Tehsil  <span class="text-danger">*</span></label>
                                                <select name="select_tehsil" id="select_tehsil" class="form-control input_color py-3">
                                                    <option value="">your Tehsil</option>
                                                    <option value="tehsil"> Tehsil</option>
                                                    <option value="tehsil"> Tehsil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">CAST <span class="text-danger">*</span></label>
                                                <input type="text" name="cast" class="form-control py-3 input_color" placeholder="CAST">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Gender <span class="text-danger">*</span></label>
                                                <select name="gender" id="select_gender" class="form-control input_color py-3">
                                                    <option value="">Select gender</option>
                                                    <option value="male"> Mail</option>
                                                    <option value="femail"> Femail</option>
                                                    <option value="other"> Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your Profession <span class="text-danger">*</span></label>
                                                <select name="profession" id="your_profession" class="form-control input_color py-3">
                                                    <option value="">Select Profession</option>
                                                    <option value="tgerg"> Profession</option>
                                                    <option value="tretert"> Profession</option>
                                                    <option value="tgrgg"> Profession</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Country Of Residence <span class="text-danger">*</span></label>
                                                <select name="country_residence" id="country_residence" class="form-control input_color py-3">
                                                    <option value="">Select country of Residence</option>
                                                    <option value="gedgh"> Pakistan</option>
                                                    <option value="gergherg"> bangladeshi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                                <input type="text" name="address_one" class="form-control py-3 input_color" placeholder="Address Line 1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 2 <span class="text-danger">*</span></label>
                                                <input type="text" name="address_two" class="form-control py-3 input_color" placeholder="Address Line 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your City <span class="text-danger">*</span></label>
                                                <input type="text" name="your_city" class="form-control py-3 input_color" placeholder="Your City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Phone No <span class="text-danger">*</span></label>
                                                <input type="text" name="phone" class="form-control py-3 input_color" placeholder="Phone No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="text" name="email" class="form-control py-3 input_color" placeholder="Write your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Password <span class="text-danger">*</span></label>
                                                <input type="password" name="password" class="form-control py-3 input_color" placeholder="#######">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Confirm Password  <span class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation" class="form-control py-3 input_color" placeholder="#######">
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
                                            <button type="submit" class="py-4 w-100 border-0 resgiter_button rounded">Register<i class="fa-solid fa-circle-plus ms-2"></i></button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="row align-items-center mb-3 mt-4">
                                <div class="col-md-5"><img class="p_leftRight_image" src="./img/registration_page/res_right.png" alt=""></div>
                                <div class="col-md-2"><p class="fw-normal text-danger text-center img_mid_text">Or Login With</p></div>
                                <div class="col-md-5"><img class="p_leftRight_image" src="./img/registration_page/res_left.png" alt=""></div>
                            </div>
                            <h6 class="text-center have_account">Don't have an account? <a href="#">Login here</a></h6>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
       </main>
@endsection
