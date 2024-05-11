@extends('layouts.front')
@section('title', $title)
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
                                    <div class="col-md-4"><img class="p_leftRight_image"
                                            src="./img/home_page/our_misson_section/rightimg.png" alt=""></div>
                                    <div class="col-md-4">
                                        <p class="fw-normal text-black">Setup a new account in a minute.</p>
                                    </div>
                                    <div class="col-md-4"><img class="p_leftRight_image"
                                            src="./img/home_page/our_misson_section/leftiimg.png" alt=""></div>
                                </div>
                            </div>
                            <form action="{{ route('user.register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label"  class="form-label">CNIC No. <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="cnic_no" name="cnic_no" class="form-control py-3 input_color"
                                                    placeholder="35220 - 1506373 -1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">First Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="fname" class="form-control py-3 input_color"
                                                    placeholder="Write your First name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Middle Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="mname" class="form-control py-3 input_color"
                                                    placeholder="Write your Middle Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Last Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="lname" class="form-control py-3 input_color"
                                                    placeholder="Write your last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">District <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly id="district"  name="district" value=""
                                                    class="form-control py-3 input_color" placeholder="">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Tehsil <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly id="tehsil" name="tehsil" value=""
                                                    class="form-control py-3 input_color" placeholder="">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Gender <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" readonly name="gender" id="gender"
                                                    value="" class="form-control py-3 input_color" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">CAST <span
                                                        class="text-danger">*</span></label>
                                                <select name="cast" id="country_residence"
                                                    class="form-control input_color py-3">
                                                    <option value="">Select cast</option>
                                                    @foreach ($cast as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your Profession <span
                                                        class="text-danger">*</span></label>
                                                <select name="profession" id="your_profession"
                                                    class="form-control input_color py-3">
                                                    <option value="">Select Profession</option>
                                                    @foreach ($professions as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Country Of Residence <span
                                                        class="text-danger">*</span></label>

                                                <select name="country_residence" id="country_residence"
                                                    class="form-control input_color py-3">
                                                    <option value="">Select country of Residence</option>
                                                    @foreach ($countries as $index => $singlevalue)
                                                        <option value="{{ $singlevalue->name }}"> {{ $singlevalue->name }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 1 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="address_one"
                                                    class="form-control py-3 input_color" placeholder="Address Line 1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Address Line 2 <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="address_two"
                                                    class="form-control py-3 input_color" placeholder="Address Line 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Your City <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="your_city"
                                                    class="form-control py-3 input_color" placeholder="Your City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Phone No <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone"
                                                    class="form-control py-3 input_color" placeholder="Phone No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="email"
                                                    class="form-control py-3 input_color" placeholder="Write your Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password"
                                                    class="form-control py-3 input_color" placeholder="#######">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="form-label" class="form-label">Confirm Password <span
                                                        class="text-danger">*</span></label>
                                                <input type="password" name="password_confirmation"
                                                    class="form-control py-3 input_color" placeholder="#######">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-group align-items-center">
                                                <input class="form-check-input p-3" type="checkbox" value=""
                                                    id="flexCheckChecked" checked>
                                                <label class="form-check-label pt-2" for="flexCheckChecked">
                                                    I hereby accept the <span>Terms and conditions</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Register<i
                                                    class="fa-solid fa-circle-plus ms-2"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="row align-items-center mb-3 mt-4">
                                <div class="col-md-5"><img class="p_leftRight_image"
                                        src="./img/registration_page/res_right.png" alt=""></div>
                                <div class="col-md-2">
                                    <p class="fw-normal text-danger text-center img_mid_text">Or Login With</p>
                                </div>
                                <div class="col-md-5"><img class="p_leftRight_image"
                                        src="./img/registration_page/res_left.png" alt=""></div>
                            </div>
                            <h6 class="text-center have_account">Don't have an account? <a href="#">Login here</a>
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection



<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- JavaScript code -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#cnic_no").change(function() {

            var cnic_no = $('#cnic_no').val();
          
            $.ajax({
                url: '{{ route('getdistrictbycnic', ':cnic_no') }}'.replace(':cnic_no',cnic_no
                    ),
                type: 'GET',
                dataType: 'json',
                success: function(response) {

                     //alert(response.gender)
                    $('#district').val(response.district);
                    $('#tehsil').val(response.tehsil);
                    $('#gender').val(response.gender);

                    // alert(response.tehsil)
                    //alert(response.gender)
                    // alert(response.tehname)

                    // //Check if response is not empty
                    // if ($.isEmptyObject(response)) {
                    //     $('#district').empty();
                    //     var option = "<option value='" + response.district + "'>" + 'no data found' +
                    //         response.district+
                    //         "</option>";
                    //     $("#district").append(option);
                    //     return;
                    // }

                    // // Clear existing options
                    // $('#district').empty();

                    // // Append new options
                    // $.each(response, function(id, data) {
                    //     var option = "<option  value='" + data.name + "'>" + data
                    //         .name + "</option>";
                    //     $("#district").append(option);
                    // });

                }
            });

        });
        //var value = $('#dropDownId').val();

    });
</script>
    
